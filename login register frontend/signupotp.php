<?php
session_start();

// Generate a random 6-digit OTP
$otp = rand(100000, 999999);

// Store OTP in session variable
$_SESSION['otp'] = $otp;

// Set OTP expiration time (5 minutes)
$_SESSION['otp_expiry'] = time() + 300;

// Redirect to OTP verification page
header('Location: otp_verification.php');
exit;
?>
