<?php
    

    $name = filter_input(INPUT_POST,'name');
    $email =filter_input(INPUT_POST,'email');
    $date=filter_input(INPUT_POST,'date');    
    $time=filter_input(INPUT_POST,'time');
    $select=filter_input(INPUT_POST,'makeup');
    $phone = filter_input(INPUT_POST,'phone');
    $message=filter_input(INPUT_POST,'message');

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "web";




    require_once 'vendor1/autoload.php';

$mail = new PHPMailer();
$mail-> SMTPDebug = 4;
$mail ->IsSMTP(true);
$mail ->SMTPAuth = true;
$mail ->Host = 'smtp.gmail.com';
$mail ->Port = 465;

   
$mail->addAttachment("bg-2.jpg");


$mail ->isHTML(true);
$mail ->SMTPSecure = 'ssl';
$mail ->Username ='binura.owin1@gmail.com';
$mail ->Password ='80216620';
$mail ->From = 'binura.owin1@gmail.com';
$mail ->Subject='confirm your appointment';
$mail ->Body ='Dear sir, 
your appointment got us and we will confirm your apointment as soon as possible
';
$mail ->AddAddress($email);

if(!$mail->send())
{
    echo "Mailer Error: " . $mail->ErrorInfo;
}
else
{
    echo "Message has been sent successfully";
}

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO web (name,email,date,time,makeup,phone,message) 
   
values('$name','$email','$date',' $time','$select',' $phone',' $message')";

if ($conn->query($sql) === TRUE) {
    echo "we will confirm your appointment as soon as possible";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>