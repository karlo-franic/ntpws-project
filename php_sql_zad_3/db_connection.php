<?php
    //$MySQL = mysqli_connect("localhost","root","","ntpws_projekt") or die('Error connecting to MySQL server.');
    $MySQL = mysqli_connect("localhost:3307","root","","ntpws_projekt");

    if (!$MySQL) {
        die("Connection failed: " . mysqli_connect_error());
    }
    //echo "Connected successfully!";
?>