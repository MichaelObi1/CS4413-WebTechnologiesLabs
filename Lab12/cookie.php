<?php

$cookieName = "cs4413";

$cookieValue = "Lab12";

$expirationTime = time() + (1 * 24 * 60 * 60);

if(isset($_COOKIE[$cookieName]))
{
    echo "Cookie named '$cookieName' is already set. Value: " . $_COOKIE[$cookieName];
}
else
{
    setcookie($cookieName, $cookieValue, $expirationTime, '/');
    echo "Cookie '$cookieName' has been set for 1 day.";
}

?>