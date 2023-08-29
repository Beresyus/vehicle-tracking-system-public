// import 'dart:convert';
// import 'package:http/http.dart' as http;
import 'package:vehicletrackingsystem/helpers/constants.dart' as helpers;

import 'package:flutter/material.dart';

class HomePage extends StatefulWidget {
  const HomePage({super.key});

  @override
  State<HomePage> createState() => HomeState();
}

class HomeState extends State<HomePage> {

  @override
  Widget build (BuildContext context) {
    return MaterialApp(
      debugShowCheckedModeBanner: false,
      title: 'Yıldız Vehicle Tracking Systems',
      home: Scaffold (
        resizeToAvoidBottomInset: false,
        appBar: helpers.atsApplicationBar("Ana Sayfa", true),
        body: Padding(
          padding: const EdgeInsets.only(top: 15, left: 15, right: 15),
          child: Text('Hoşgeldiniz, ${ helpers.userName }'),
        ),
        drawer: helpers.atsNavigation(context)
      ),
    );
  }
}