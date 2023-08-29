// System
// import 'dart:convert';
import 'package:flutter/material.dart';
import 'package:http/http.dart' as http;
// Login Pages
import 'package:vehicletrackingsystem/screens/auth/LoginPage.dart';
// Staff Pages
import 'package:vehicletrackingsystem/screens/staff/HomePage.dart';
import 'package:vehicletrackingsystem/screens/staff/DrivePage.dart';

String apiUrl = "https://2658-85-153-207-92.ngrok-free.app/api";
String? userName;
String? bearerToken;
bool isAdmin = false;
bool isWorking = false;

void handleLogout(BuildContext context) async {
  final http.Response response = await http.post(
      Uri.parse('$apiUrl/logout'),
      headers: { 'Authorization' : 'Bearer $bearerToken', 'Content-Type': 'application/json; charset=UTF-8' }
  );

  bearerToken = null;
  userName = null;

  // ignore: use_build_context_synchronously
  if( response.statusCode == 200 ) Navigator.pushReplacement(context, MaterialPageRoute(builder: (context) => const LoginPage())); // LoginPage
}

AppBar atsApplicationBar(String whichPage, bool isHaveActions) {
  return isHaveActions
  ?
    AppBar(
      title: Text('Araç Takip Sistemi - $whichPage'),
      centerTitle: true,
      backgroundColor: Colors.black,
    )
  :
    AppBar(
      title: Text('Araç Takip Sistemi - $whichPage'),
      centerTitle: true,
      backgroundColor: Colors.black,
    )
  ;
}

NavigationDrawer atsNavigation(BuildContext context) {
  return NavigationDrawer (
    children: isAdmin ? [
      ListTile(
        leading: const Icon(Icons.home_outlined),
        title: const Text('Home'),
        onTap: () {
          Navigator.pushReplacement(context, MaterialPageRoute(builder: (context) => const HomePage()));
        },
      ),
      ListTile(
        leading: const Icon(Icons.drive_eta_rounded),
        title: const Text('Sürüş Başlat'),
        onTap: () {
          Navigator.pushReplacement(context, MaterialPageRoute(builder: (context) => const DrivePage()));
        },
      ),
      const Divider(color: Colors.black54),
      ListTile(
        leading: const Icon(Icons.logout),
        title: const Text('Çıkış Yap'),
        onTap: () {
          handleLogout(context);
        },
      ),
    ] : [
      ListTile(
        leading: const Icon(Icons.home_outlined),
        title: const Text('Home'),
        onTap: () {
          Navigator.pushReplacement(context, MaterialPageRoute(builder: (context) => const HomePage()));
        },
      ),
      ListTile(
        leading: const Icon(Icons.drive_eta_rounded),
        title: const Text('Sürüş Başlat'),
        onTap: () {
          Navigator.pushReplacement(context, MaterialPageRoute(builder: (context) => const DrivePage()));
        },
      ),
      const Divider(color: Colors.black54),
      ListTile(
        leading: const Icon(Icons.logout),
        title: const Text('Çıkış Yap'),
        onTap: () {
          handleLogout(context);
        },
      ),
    ],
  );
}

BottomNavigationBar atsStaffDrivePage() {
  return BottomNavigationBar(
    items: const [
      BottomNavigationBarItem(icon: Icon(Icons.drive_eta), label: "Sürüş Başlat"),
      BottomNavigationBarItem(icon: Icon(Icons.home), label: "Ana Sayfa"),
    ]
  );
}

class StaffInterface {
  static BottomNavigationBar DrivePage(onTap, int currentIndex) {
    return BottomNavigationBar (
      selectedItemColor: Colors.blue,
      unselectedItemColor: Colors.black87,
      currentIndex: currentIndex,
      onTap: onTap,
      items: const [
        BottomNavigationBarItem(icon: Icon(Icons.drive_eta), label: "Sürüş Başlat"),
        BottomNavigationBarItem(icon: Icon(Icons.list), label: "Geçmiş Sürüşlerim")
      ]
    );
  }
}

class AdminInterface {

}
