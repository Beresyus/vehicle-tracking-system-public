// System
import 'dart:convert';
import 'package:http/http.dart' as http;
import 'package:vehicletrackingsystem/helpers/constants.dart' as helpers;

// Widgets
import 'package:flutter/material.dart';
// Forms
import 'package:vehicletrackingsystem/screens/admin/HomePage.dart' as Admin;
import 'package:vehicletrackingsystem/screens/staff/HomePage.dart' as Staff;


class LoginForm extends StatefulWidget {
  const LoginForm({super.key});

  @override
  State<LoginForm> createState() => LoginFormState();
}

class LoginFormState extends State<LoginForm> {
  final GlobalKey<FormState> formKey = GlobalKey<FormState>();

  TextEditingController emailController = TextEditingController();
  TextEditingController passwordController = TextEditingController();

  void handleLogin(String email, String password, BuildContext context) async {
    final http.Response response = await http.post (
        Uri.parse('${helpers.apiUrl}/login'),
        headers: { 'Content-Type': 'application/json; charset=UTF-8' },
        body: jsonEncode({ 'email': email,  'password': password })
    );

    if( response.statusCode == 200 ) {
      final responseData = jsonDecode(response.body);
      helpers.bearerToken = responseData['token'];
      helpers.userName = responseData['name'];
      helpers.isAdmin = responseData['isAdmin'];
      helpers.isWorking = responseData['isWorking'];
      responseData['isAdmin']
          // ignore: use_build_context_synchronously
          ? Navigator.pushReplacement(context, MaterialPageRoute( builder: (context) => const Admin.HomePage() ) )
          // ignore: use_build_context_synchronously
          : Navigator.pushReplacement( context, MaterialPageRoute( builder: (context) => const Staff.HomePage() ) );
      // helpers.handleLogout();
    } else {
      final responseData = jsonDecode(response.body);
      ScaffoldMessenger.of(context).showSnackBar( SnackBar( content: Text( responseData['message'] ) ) );
    }
  }

  @override
  void dispose() {
    emailController.dispose();
    passwordController.dispose();
    super.dispose();
  }

  bool _isObsecured = false;
  void _toggleShowPasswordArea() {
    setState(() {
      _isObsecured = !_isObsecured;
    });
  }

  @override
  Widget build(BuildContext context) {
    return Container(
      alignment: Alignment.center,
      padding: const EdgeInsets.only(left: 20, right: 20),
      child: Form(
        key: formKey,
        child: Column(
          crossAxisAlignment: CrossAxisAlignment.center,
          children: <Widget>[
            Padding(
              padding: const EdgeInsets.only(top: 200),
              child: TextFormField(
                controller: emailController,
                validator: (String? value) {
                  if (value == null || value.isEmpty) {
                    return 'Email adresinizi giriniz';
                  }
                  return null;
                },
                decoration: const InputDecoration(
                  icon: Icon(Icons.email),
                  hintText: 'Email Adresiniz',
                  border: OutlineInputBorder(),
                ),
              ),
            ),
            Padding(
              padding: const EdgeInsets.symmetric(vertical: 8.0),
              child: TextFormField(
                controller: passwordController,
                obscureText: !_isObsecured,
                validator: (String? value) {
                  if (value == null || value.isEmpty) {
                    return 'Şifrenizi giriniz';
                  }
                  return null;
                },
                decoration: InputDecoration(
                  icon: const Icon(Icons.password),
                  hintText: 'Şifreniz',
                  border: const OutlineInputBorder(),
                  suffixIcon: InkWell(
                    onTap: _toggleShowPasswordArea,
                    child: Icon(_isObsecured ? Icons.visibility_off : Icons.visibility),
                  ),
                ),
              ),
            ),
            Padding(
              padding: const EdgeInsets.symmetric(vertical: 8.0),
              child: ElevatedButton(
                onPressed: () {
                  // Validate will return true if the form is valid, or false if the form is invalid
                  if (formKey.currentState!.validate()) {
                    handleLogin(emailController.text, passwordController.text, context);
                  }
                },
                style: ButtonStyle(
                  backgroundColor: MaterialStateProperty.all<Color>(Colors.black),
                  textStyle: MaterialStateProperty.all<TextStyle>(const TextStyle(letterSpacing: 1.5)),
                ),
                child: const Text('GİRİŞ'),
              ),
            ),
          ],
        ),
      ),
    );
  }
}

class LoginPage extends StatelessWidget {
  const LoginPage({super.key});

  @override
  Widget build(BuildContext context) {
    return MaterialApp (
      debugShowCheckedModeBanner: false,
      title: 'Yıldız Vehicle Tracking Systems',
      home: Scaffold(
        resizeToAvoidBottomInset: false,
        appBar: helpers.atsApplicationBar("Giriş", false),
        body: const LoginForm(),
      ),
    );
  }
}
