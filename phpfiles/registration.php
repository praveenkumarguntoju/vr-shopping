<!DOCTYPE html>
<html>

<head>

</head>

<body>
<?php include 'createConnection.php';?>

Welcome <?php echo $_POST["firstName"]; ?><br>
Lastname <?php echo $_POST["lastName"]; ?><br>
Your address is: <?php echo $_POST["address"]; ?><br>
Your city is:<?php echo $_POST["city"]; ?><br>
Your state is:<?php echo $_POST["state"]; ?><br>
Your zipcode is:<?php echo $_POST["zipcode"]; ?><br>
Your mobile number is:<?php echo $_POST["mobilenumber"]; ?><br>
Your email is:<?php echo $_POST["email"]; ?><br>
Your password is:<?php echo $_POST["password"]; ?><br>


<?php
$sql = "INSERT INTO userdetails(email,fname,lname,address,city,state,postcode,mobile,password) VALUES('".$_POST["email"]."','".$_POST["firstName"]."','".$_POST["lastName"]."',
'".$_POST["address"]."','".$_POST["city"]."','".$_POST["state"]."','".$_POST["zipcode"]."',".$_POST["mobilenumber"].",'".$_POST["password"]."')";
echo $sql;
if ($conn->query($sql) === TRUE) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>





</body>

</html>
