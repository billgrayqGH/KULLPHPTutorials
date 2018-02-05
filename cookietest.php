<?php
$cookie_name = "user";
$cookie_value = "Cookie Monster";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day


if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not created!";
} else {
    echo "Cookie '" . $cookie_name . "' is created!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

