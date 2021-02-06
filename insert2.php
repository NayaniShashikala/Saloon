<?php
    

    $name = filter_input(INPUT_POST,'name');

    $email =filter_input(INPUT_POST,'email');
    /*$date=$_POST['date'];
    $time=$_POST['time'];
    $select=$_POST['makeup'];
    $phone = $_POST['phone'];
    $message=$_POST['message'];*/

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "web";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO web (name,email,date,time,makeup,phone,message) 
values('$name','$email','2019.01.21','1.30pm','2','0719393390','binura owin')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>