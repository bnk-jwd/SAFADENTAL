<?php
$name =$_POST['name'];
$email =$_POST['email'];
$phone =$_POST['phone'];
$date =$_POST['date'];
$service =$_POST['service'];
$doctor =$_POST['doctor'];

//database connect

$conn = new mysqli('localhost','root','','safadental')
  if($conn->connect_error){
    die('Connection Faiiled : ' .$conn->connect_error);
  }
  else{
    $stmt = $conn->prepare("insert into listappointement(name,email,phone,date,service,doctor) values(?,?,?,?,?,?)");
    $stmt -> bind_param("ssisss",$name, $email, $phone, $date, $service, $doctor);
    $stmt -> execute();
    echo  "Well you'll take your set.... ";
    $stmt -> close();
    $conn -> close();
  }
?>