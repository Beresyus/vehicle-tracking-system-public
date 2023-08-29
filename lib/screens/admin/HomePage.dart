import 'package:vehicletrackingsystem/helpers/constants.dart' as helpers;

import 'package:flutter/material.dart';

class HomePage extends StatelessWidget {
  const HomePage({super.key});

  @override
  Widget build (BuildContext context) {
    return MaterialApp(
      debugShowCheckedModeBanner: false,
      title: 'Yıldız Vehicle Tracking Systems',
      home: Scaffold(
        resizeToAvoidBottomInset: false,
        appBar: helpers.atsApplicationBar("Ana Sayfa", true),
        body: const Text('Welcome admin'),
      ),
    );
  }
}