<?php


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
values('binta',binta@gmail.com,'2019/01/31',' 1.30pm','2','0719393390','nhukkjus')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>