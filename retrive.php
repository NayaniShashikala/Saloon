<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: black;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color:#bf925b;
color: white;
}

</style>
</head>
<body>
<table>
<tr>
<th>id</th>
<th>name</th>
<th>time</th>
<th>makeup</th>
<th>date</th>
<th>email</th>
<th>phone</th>
<th>message</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "web");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM web";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<td>" . $row["id"]. "</td><td>" . $row["name"] . "</td><td>"
. $row["time"]. "</td><td>". $row["makeup"]. "</td><td>". $row["date"]. "</td><td>"
. $row["email"]. "</td><td>". $row["phone"]. "</td><td>". $row["message"]. "</td><tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>