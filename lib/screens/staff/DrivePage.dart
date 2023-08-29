// Systematic Libraries
import 'dart:convert';
import 'package:http/http.dart' as http;
import 'package:vehicletrackingsystem/helpers/constants.dart' as helpers;
import 'package:geocoding/geocoding.dart';
import 'package:geolocator/geolocator.dart';

// For UI/UX.
import 'package:flutter/material.dart';

// Pages
import 'package:vehicletrackingsystem/screens/staff/DrivingPage.dart';

class DrivePage extends StatefulWidget {
  const DrivePage({super.key});

  @override
  State<DrivePage> createState() => DriveState();
}

class DriveState extends State<DrivePage> {
  final GlobalKey<ScaffoldMessengerState> scaffoldMessengerKey = GlobalKey<ScaffoldMessengerState>();

  int? selectedValue;
  List _cars = [];
  List _myDrives = [];

  Position? geolocation;
  late bool servicePermission = false;
  late LocationPermission permission;

  Future<Position> _getCurrentLocation() async {
    servicePermission = await Geolocator.isLocationServiceEnabled();

    if (!servicePermission) print("Service Disabled");
    permission = await Geolocator.checkPermission();
    if (permission == LocationPermission.denied || permission == LocationPermission.deniedForever) permission = await Geolocator.requestPermission();
    return await Geolocator.getCurrentPosition();
  }

  Future createNewRoute(BuildContext context) async {
    geolocation = await _getCurrentLocation();
    if( selectedValue == null ) {
      scaffoldMessengerKey.currentState?.showSnackBar(const SnackBar( content: Text("Bir araç seçmelisiniz.")));
    } else {
      final http.Response response = await http.post (
          Uri.parse('${helpers.apiUrl}/staff/Route'),
          headers: { 'Authorization': 'Bearer ${helpers.bearerToken}', 'Content-Type': 'application/json; charset=UTF-8' },
          body: jsonEncode({ "whichCar": selectedValue, "geolocation": jsonEncode({ "lat": geolocation?.latitude, "lng": geolocation?.longitude }) })
      );

      if( response.statusCode == 200 ) {
        // scaffoldMessengerKey.currentState?.showSnackBar( SnackBar( content: Text( jsonDecode(response.body).routeAdded ? "Eklendi" : "Eklenemedi" )));
        final responseData = jsonDecode(response.body);
        Navigator.of(context).pushReplacement(MaterialPageRoute(builder: (context) => DrivingPage( routeID: responseData['addedRoute'], startPosition: geolocation, whichCar: selectedValue! ) ));
      } else {
        scaffoldMessengerKey.currentState?.showSnackBar( const SnackBar( content: Text("Sunucu Hatası | Sistem Görevlisiyle İletişime Geçin")));
      }
    }
  }

  Future fetchDrivePageData() async {
    final response = await http.get(
        Uri.parse('${helpers.apiUrl}/staff/DrivePage'),
        headers: { 'Authorization' : 'Bearer ${helpers.bearerToken}', 'Content-Type': 'application/json; charset=UTF-8' }
    );

    if(response.statusCode == 200) {
      var jsonData = jsonDecode(response.body);
      setState(
        () {
          _cars = jsonData["cars"];
          _myDrives = jsonData["myDriveData"];
        }
      );
    }
  }

  @override
  void initState() {
    fetchDrivePageData();
    super.initState();
  }

  int currentIndex = 0;
  void _onBottomBarTapped(int index) {
    setState(() {
      currentIndex = index;
    });
  }

  @override
  Widget build (BuildContext context) {
    return MaterialApp (
      debugShowCheckedModeBanner: false,
      title: 'Yıldız Vehicle Tracking Systems',
      home: ScaffoldMessenger(
        key: scaffoldMessengerKey,
        child: Scaffold (
            resizeToAvoidBottomInset: false,
            appBar: helpers.atsApplicationBar("Ana Sayfa", true),
            body: Padding (
              padding: currentIndex == 0 ? const EdgeInsets.only(top: 200, left: 20, right: 20, bottom: 100) : const EdgeInsets.only(top: 200, left: 20, right: 20, bottom: 100),
              child: Column (
                children: currentIndex == 0 ?
                <Widget>[
                  DropdownButton (
                    isExpanded: true,
                    hint: const Text("Bir araç seçiniz"),
                    value: selectedValue,
                    items: _cars.map(
                            (c) => DropdownMenuItem( value: c['id'], child: Text('${c['brand']} - ${c['plate']}') )
                    ).toList(),
                    onChanged: (value) {
                      setState(
                              () {
                            selectedValue = value as int?;
                          }
                      );
                    },
                  ),
                  ElevatedButton (
                    onPressed: () {
                      createNewRoute(context);
                    },
                    style: ButtonStyle(
                      backgroundColor: MaterialStateProperty.all<Color>(Colors.black),
                      textStyle: MaterialStateProperty.all<TextStyle>(const TextStyle(letterSpacing: 1.5)),
                    ),
                    child: const Text('Sürüş Başlat'),
                  ),
                ] : <Widget>[
                  Expanded (
                      child: SizedBox(
                        height: 800.0,
                        child: ListView.builder(
                          shrinkWrap: true,
                          itemCount: _myDrives.length,
                          itemBuilder: (context, index) {
                            return ListTile(
                              title: Text(_myDrives[index]['whichCar']),
                              subtitle: Text(_myDrives[index]['whoDriving']),
                            );
                          },
                        ),
                      )
                  )
                ],
              ),
            ),
            drawer: helpers.atsNavigation(context),
            bottomNavigationBar: helpers.StaffInterface.DrivePage(_onBottomBarTapped, currentIndex)
        ),
      )
    );
  }
}