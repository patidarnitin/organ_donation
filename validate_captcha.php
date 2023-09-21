<?php

if (isset($_POST['g-recaptcha-response'])) {
    $captcha = $_POST['g-recaptcha-response'];
    print_r($_POST);
} else {
    $captcha = false;
}



if (!$captcha) {
    echo "please fill captcha";
} else {
    echo 'test';
    $secret   = '6Lcoca8eAAAAADyHOWdKhO6sZUZ-j5xsdBhNJM2q';
    $response = file_get_contents(
        "https://www.google.com/recaptcha/api/siteverify?secret=" . $secret . "&response=" . $captcha . "&remoteip=" . $_SERVER['REMOTE_ADDR']
    );
    // use json_decode to extract json response
    $response = json_decode($response);
 print_r($response);
    if ($response->success === false) {
        print_r($response);
    }
}

//... The Captcha is valid you can continue with the rest of your code
//... Add code to filter access using $response . score
if ($response->success==true && $response->score <= 0.5) {
    print_r($response);
}
?>