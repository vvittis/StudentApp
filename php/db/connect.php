<?php
$host  = 'db' ; //service name from docker-compose.yml
$user = 'vasilis';
$password = 'vasilis';
$database = 'school';

$db = new mysqli($host,$user,$password,$database);

if($db->connect_error){
  echo 'connection_error' . $conn->connect_error;
}
else{
  // echo "ALL GOOD";
}
