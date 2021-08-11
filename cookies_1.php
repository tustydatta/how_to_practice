<?php
if (!isset($_COOKIE['user'])) {
     echo "Cookie name is not set!";
} else {
     echo "Cookie " .'user' . "is set! <br>";
     echo "Value is: " . $_COOKIE['user'];
}

?>