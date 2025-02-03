<?php
// Your API Key (You can change this for security)
$api_key = "Wd6fDy2CNXRllN1RwdA0Xj23SvsV5btxnpZrawXf3L4RLxISDXXcJm0qHB4knWXUPJv5lGDwJ5SYKhhXDDtH4ByvJaSg1Tz0R6dwecwMUcPEt6YQWquaMSF2qjN1F4GC
";

// Get token from query string
if (isset($_GET['key'])) {
    $user_key = $_GET['key'];

    // Encode the key and other parameters (Example: Base64 Encoding)
    $encoded_token = base64_encode("key=$user_key&submetric=14892299");

    // Redirect to the target URL with the encoded token
    header("Location: https://www.profitablecpmrate.com/api/users?token=" . urlencode($encoded_token));
    exit();
} else {
    echo "Invalid Request!";
}
?>
