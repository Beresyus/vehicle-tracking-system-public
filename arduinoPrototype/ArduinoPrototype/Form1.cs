using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using System.Device.Location;
using System.Net.Http;
// using System.Threading.Tasks;
using static System.Windows.Forms.VisualStyles.VisualStyleElement;

namespace ArduinoPrototype
{
    public partial class visualizedPanel : Form
    {
        private GeoCoordinateWatcher geoWatcher;
        int attempt = 0;
        String IMEI = "865067025507404";
        String whichRoute;
        double latitude;
        double longitude;
        public visualizedPanel()
        {
            InitializeComponent();
        }

        private async void visualizedPanel_Load(object sender, EventArgs e)
        {
            geoWatcher = new GeoCoordinateWatcher();
            geoWatcher.Start();

            string response = await openRoute();
            whichRoute = response;

            timer.Interval = 2500;
            timer.Start();
        }

        private async Task<string> openRoute()
        {
            string returnResponse = "";
            do
            {
                latitude = geoWatcher.Position.Location.Latitude;
                longitude = geoWatcher.Position.Location.Longitude;
            } while (double.IsNaN(latitude) || double.IsNaN(longitude));

            using (HttpClient httpClient = new HttpClient())
            {
                var json = "{\"lat\": " + latitude + ", \"lng\": " + longitude + " }";
                var parameters = new Dictionary<string, string> {
                    { "G", json }
                };

                try
                {
                    var URL = String.Format("https://ats.beresyus.com/api/device/{0}", IMEI);
                    var request = new HttpRequestMessage(HttpMethod.Post, URL);
                    request.Content = new FormUrlEncodedContent(parameters);

                    var requestString = $"{request.Method} {request.RequestUri} HTTP/{request.Version}";
                    foreach (var header in request.Headers)
                    {
                        requestString += $"\r\n{header.Key}: {string.Join(",", header.Value)}";
                    }

                    var response = await httpClient.SendAsync(request);
                    var responseString = await response.Content.ReadAsStringAsync();
                    returnResponse = responseString;
                }
                catch (Exception ex)
                {
                    returnResponse = ex.Message;
                    Console.WriteLine("HttpRequestException: " + ex.Message);
                    if (ex.InnerException != null)
                    {
                        Console.WriteLine("Inner Exception: " + ex.InnerException.Message);
                    }
                }
            }
            return returnResponse;
        }

        private void timer_Tick(object sender, EventArgs e)
        {
            attempt++;
            if (geoWatcher != null && geoWatcher.Position != null)
            {
                double latitude = geoWatcher.Position.Location.Latitude;
                double longitude = geoWatcher.Position.Location.Longitude;

                latitudeLabel_Value.Text = latitude.ToString();
                longitudeLabel_Value.Text = longitude.ToString();
                attemptLabel_Value.Text = attempt.ToString();
                googleLink.Text = String.Format("https://maps.google.com/?q={0}, {1}", latitude.ToString(), longitude.ToString());
                updateRoute();
            }
        }

        private async void updateRoute()
        {
            do
            {
                latitude = geoWatcher.Position.Location.Latitude;
                longitude = geoWatcher.Position.Location.Longitude;
            } while (double.IsNaN(latitude) || double.IsNaN(longitude) || whichRoute == null);
            using (HttpClient httpClient = new HttpClient())
            {
                var json = "{\"lat\": " + latitude + ", \"lng\": " + longitude + " }";


                var parameters = new Dictionary<string, string> {
                    { "RID", whichRoute },
                    { "G", json }
                };

                try
                {
                    var URL = String.Format("https://ats.beresyus.com/api/device/{0}", IMEI);
                    var request = new HttpRequestMessage(HttpMethod.Post, URL);
                    request.Content = new FormUrlEncodedContent(parameters);

                    var requestString = $"{request.Method} {request.RequestUri} HTTP/{request.Version}";
                    foreach (var header in request.Headers)
                    {
                        requestString += $"\r\n{header.Key}: {string.Join(",", header.Value)}";
                    }

                    var response = await httpClient.SendAsync(request);
                    var responseString = await response.Content.ReadAsStringAsync();
                }
                catch (Exception ex)
                {
                    Console.WriteLine("HttpRequestException: " + ex.Message);
                    if (ex.InnerException != null)
                    {
                        Console.WriteLine("Inner Exception: " + ex.InnerException.Message);
                    }
                }
            }
        }

        private void googleLink_LinkClicked(object sender, LinkLabelLinkClickedEventArgs e)
        {
            System.Diagnostics.Process.Start(googleLink.Text);
        }

        private void visualizedPanel_FormClosing(object sender, FormClosingEventArgs e)
        {
            geoWatcher.Dispose();
            timer.Dispose();
        }
    }
}
