<?php session_start(); ?>
<?php
if(!isset($_SESSION['username']))
  header('Location: index.html');
  //user information
  $host = "140.120.13.183";
  $user = "sensor";
  $pass = "123698745";

  //database information
  $databaseName = "sensor_network";
  $tableName = "sensor_value";

  //Connect to mysql database
  $con = mysql_connect($host,$user,$pass);
  mysql_query("SET NAMES 'UTF8'");
  $dbs = mysql_select_db($databaseName, $con);


  //Query database for data
  $result = mysql_query("SELECT * FROM $tableName");

  //store matrix
  $i=0;
  while ($row = mysql_fetch_array($result)){
    $employee[$i]=$row;
    $i++;
  }

  //echo result as json
    echo json_encode($employee);
?>
