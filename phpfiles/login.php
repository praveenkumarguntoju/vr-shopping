<!DOCTYPE html>
<html>

<head>

</head>

<body>
Welcome <?php echo $_POST["name"]; ?><br>
Your password address is: <?php echo $_POST["password"]; ?>
<?php include 'createConnection.php';?>

<?php
// selecting rows
$sql = "SELECT * FROM userdetails where email = '".$_POST["name"]."' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "id: " . $row["id"]. " - Name: " . $row["email"]. " " .
$row["city"]. "<br>";
}
} else {
echo "0 results";
}
$conn->close();
?>


</body>

</html>
