<?php
    $mysqli = new mysqli("localhost","root","","updorm");

    // Check connection
    if ($mysqli -> connect_errno) {
      echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
      exit();
    }
    $d = json_decode(file_get_contents("php://input"));
    $mysqli -> set_charset("utf8");
?>