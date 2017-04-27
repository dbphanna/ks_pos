<?php
    // Create Connection

  $servername = "localhost";
  $useranme = "root";
  $password = "";
  $dbname = "ks_pos";

  $connect = new mysqli ($servername, $useranme, $password, $dbname);

  if($connect->connect_error){
    die ("connection fail:". $connect->connect_error);
  }
  else{
    //echo "connection successfully";
  }
?>
