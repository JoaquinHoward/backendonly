<?php
    $ip_address = $_SERVER["REMOTE_ADDR"];
    $method = $_SERVER["REQUEST_METHOD"];
    $browser = $_SERVER["HTTP_USER_AGENT"];
    echo htmlspecialchars($ip_address);
    echo "<br>";
    echo htmlspecialchars($method);
    echo "<br>";
    echo htmlspecialchars($browser);
?>