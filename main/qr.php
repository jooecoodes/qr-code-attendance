<?php
// Include the QR code library
require_once('../phpqrcode/qrlib.php');

// Define the text to be encoded
$text = "1";
$testName = "test";
// Generate the QR code image and save it to a file
QRcode::png($text, "../assets/$testName.png");

// Display the QR code image in the browser
echo '<img src="qrcode.png" />';

// // Include the instascan.js library
// echo '<script src="instascan.min.js"></script>';

// // Create a video element to show the camera
// echo '<video id="preview"></video>';

// // Create a script to scan the QR code and display the text
// echo '<script>
//   // Create a scanner object
//   let scanner = new Instascan.Scanner({ video: document.getElementById("preview") });
  
//   // Listen for scan events
//   scanner.addListener("scan", function (content) {
//     // Display the text in an alert box
//     alert(content);
//   });
  
//   // Get the camera devices
//   Instascan.Camera.getCameras().then(function (cameras) {
//     // If there are cameras, use the first one
//     if (cameras.length > 0) {
//       scanner.start(cameras[0]);
//     } else {
//       // Otherwise, show an error message
//       console.error("No cameras found.");
//     }
//   }).catch(function (e) {
//     // Handle any errors
//     console.error(e);
//   });
// </script>';
?>