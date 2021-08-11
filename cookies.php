<?php
$cookie_name = "user";
$cookie_value = "Akash Datta";
setcookie($cookie_name, $cookie_value, time() + 15, "/");
?>
<p><strong>Note:</strong> You might have to reload the page to see the value of the cookie.</p>