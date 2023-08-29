// Systematic
import 'dart:async';
import 'dart:convert';
import 'package:flutter/services.dart';
import 'package:http/http.dart' as http;
import 'package:vehicletrackingsystem/helpers/constants.dart' as helpers;

import 'package:geocoding/geocoding.dart';
import 'package:geolocator/geolocator.dart';

// UI & UX
import 'package:flutter/material.dart';

// Pages
import 'package:vehicletrackingsystem/screens/staff/DrivePage.dart';

class ArduinoPage extends StatefulWidget {
  const ArduinoPage({super.key});

  @override
  ArduinoState createState() => ArduinoState();
}

class ArduinoState extends State<ArduinoPage> {
  Timer? _locationTimer;
  final GlobalKey<ScaffoldMessengerState> scaffoldMessengerKey = GlobalKey<ScaffoldMessengerState>();

  int? routeID;
  int? whichCar;
  Position? _currentLocation;
  Position? _passedLocation;
  late bool servicePermission = false;
  late LocationPermission permission;
  String _currentAddress = "";

  Future<Position> _getCurrentLocation() async {
    servicePermission = await Geolocator.isLocationServiceEnabled();

    if (!servicePermission) print("Service Disabled");
    permission = await Geolocator.checkPermission();
    if (permission == LocationPermission.denied || permission == LocationPermission.deniedForever) permission = await Geolocator.requestPermission();
    return await Geolocator.getCurrentPosition();
  }

  _getAddressFromCoordinates() async {
    try {
      List<Placemark> placeMarks = await placemarkFromCoordinates(_currentLocation!.latitude, _currentLocation!.longitude);
      Placemark address = placeMarks[0];
      return "${address.street}, ${address.subAdministrativeArea} | ${address.postalCode}, ${address.administrativeArea}, ${address.country}";
    } catch (e) {
      throw Exception(e);
    }
  }

  void _startLocationTimer() {
    _locationTimer = Timer.periodic(const Duration(seconds: 3), (timer) async {
      // setState(() { _passedLocation = _currentLocation; });
      _currentLocation = await _getCurrentLocation();
      _currentAddress = await _getAddressFromCoordinates();
      var distanceBetweeenTwoLocation = await Geolocator.distanceBetween(
          _passedLocation!.latitude,
          _passedLocation!.longitude,
          _currentLocation!.latitude,
          _currentLocation!.longitude
      );
      await updateExistingRoute(_currentLocation, distanceBetweeenTwoLocation / 1000);
      print("${_currentLocation} | ${_currentAddress}");
      setState(() { _currentLocation = _currentLocation; _passedLocation = _currentLocation; _currentAddress = _currentAddress; });
    });
  }



  @override
  void initState() {
    // _startLocationTimer();
    fetchSettings(context);
    super.initState();
  }

  @override
  void dispose() {
    _locationTimer?.cancel();
    super.dispose();
  }

  Future fetchSettings(BuildContext context) async {
    final http.Response response = await http.get (
        Uri.parse('${helpers.apiUrl}/352134104424057/+905416241048'),
        headers: { 'Content-Type': 'application/json; charset=UTF-8' }
    );

    if( response.statusCode == 200 ) {
      var data = jsonDecode(response.body);
      print(data);
      var device = jsonDecode(data.device);
      var car = jsonDecode(data.car);
      var company = jsonDecode(data.company);

      if( device.RECORD_DAYS == "NEVER" ) {
        SystemNavigator.pop();
      } else if( device.RECORD_DAYS != "ALWAYS" && device.RECORD_DAYS != "NEVER" ) {
        if( DateTime.now().compareTo(device.RECORD_START) == -1 || device.RECORD_START.compareTo(DateTime.now()) == -1 ) SystemNavigator.pop();
      } else {

      }
    } else {
      scaffoldMessengerKey.currentState?.showSnackBar( const SnackBar( content: Text("Sunucu Hatası | Sistem Görevlisiyle İletişime Geçin")));
    }
  }
  Future open_a_Route() async {
    final http.Response response = await http.post (
        Uri.parse('${helpers.apiUrl}/staff/Route/${routeID}'),
        headers: { 'Authorization': 'Bearer ${helpers.bearerToken}', 'Content-Type': 'application/json; charset=UTF-8' },
        body: jsonEncode({ "whichCar": whichCar, "geolocation": jsonEncode({ "lat": updatedPosition?.latitude, "lng": updatedPosition?.longitude}), "distance": distance })
    );

    if( response.statusCode != 200 ) {
      scaffoldMessengerKey.currentState?.showSnackBar( const SnackBar( content: Text("Sunucu Hatası | Sistem Görevlisiyle İletişime Geçin")));
      Navigator.of(context).pushReplacement(MaterialPageRoute(builder: (context) => const DrivePage()));
    }
  }
  Future updateExistingRoute(Position? updatedPosition, double distance) async {
    final http.Response response = await http.post (
        Uri.parse('${helpers.apiUrl}/staff/Route/${routeID}'),
        headers: { 'Authorization': 'Bearer ${helpers.bearerToken}', 'Content-Type': 'application/json; charset=UTF-8' },
        body: jsonEncode({ "whichCar": whichCar, "geolocation": jsonEncode({ "lat": updatedPosition?.latitude, "lng": updatedPosition?.longitude}), "distance": distance })
    );

    if( response.statusCode != 200 ) {
      scaffoldMessengerKey.currentState?.showSnackBar( const SnackBar( content: Text("Sunucu Hatası | Sistem Görevlisiyle İletişime Geçin")));
      Navigator.of(context).pushReplacement(MaterialPageRoute(builder: (context) => const DrivePage()));
    }
  }
  Future closeExistingRoute(BuildContext context) async {
    final http.Response response = await http.patch (
        Uri.parse('${helpers.apiUrl}/staff/Route/${routeID}'),
        headers: { 'Authorization': 'Bearer ${helpers.bearerToken}', 'Content-Type': 'application/json; charset=UTF-8' }
    );

    if( response.statusCode == 200 ) {
      // scaffoldMessengerKey.currentState?.showSnackBar( SnackBar( content: Text( jsonDecode(response.body).routeAdded ? "Eklendi" : "Eklenemedi" )));
      Navigator.of(context).pushReplacement(MaterialPageRoute(builder: (context) => const DrivePage()));
    } else {
      scaffoldMessengerKey.currentState?.showSnackBar( const SnackBar( content: Text("Sunucu Hatası | Sistem Görevlisiyle İletişime Geçin")));
    }
  }


  @override
  Widget build(BuildContext context) {
    return MaterialApp (
        debugShowCheckedModeBanner: false,
        title: 'Yıldız Vehicle Tracking Systems',
        home: ScaffoldMessenger(
          key: scaffoldMessengerKey,
          child: Scaffold (
            appBar: helpers.atsApplicationBar("Canlı", false),
            body: Center(
              child: Column(
                mainAxisAlignment: MainAxisAlignment.center,
                crossAxisAlignment: CrossAxisAlignment.center,
                children: <Widget>[
                  const Text("Sürüş Başlatıldı",
                    style: TextStyle(
                      fontSize: 24,
                      fontWeight: FontWeight.bold,
                    ),
                  ),
                  const SizedBox(
                    height: 6,
                  ),
                  const SizedBox(
                    height: 6,
                  ),
                  Text("{\"lat:\" ${_currentLocation?.latitude},\"lng:\" ${_currentLocation?.longitude}}"),
                  const SizedBox(
                    height: 30,
                  ),
                  const Text("Adres",
                    style: TextStyle(
                      fontSize: 24,
                      fontWeight: FontWeight.bold,
                    ),
                  ),
                  const SizedBox(
                    height: 6,
                  ),
                  Text(_currentAddress),
                  const SizedBox(
                    height: 15,
                  ),
                  const Row(
                    mainAxisAlignment: MainAxisAlignment.center,
                    children: [
                      Icon(Icons.fiber_manual_record, color: Colors.red),
                      SizedBox(width: 5), // İkisi arasında istediğiniz boşluk miktarını ayarlayabilirsiniz.
                      Text(
                        'LIVE',
                        style: TextStyle(fontSize: 16, letterSpacing: 5, fontWeight: FontWeight.bold),
                      ),
                    ],
                  ),
                  const SizedBox(
                    height: 30,
                  ),
                  ElevatedButton(
                      style: ButtonStyle(
                        backgroundColor: MaterialStateProperty.all<Color>(Colors.red),
                      ),
                      onPressed: () async {
                        closeExistingRoute(context);
                      },
                      child: const Text("Sürüşü Sonlandır")
                  ),
                ],
              ),
            ),
          ),
        )
    );
  }
}
