<?php
    $MySQL = mysqli_connect("localhost:3307","root","","ntpws_projekt");

    if (!$MySQL) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>