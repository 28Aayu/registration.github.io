<?php
$firstname = $_POST['Firstname'];
$lastname = $_POST['Lastname'];
$gender = $_POST['Gender'];
$password = $_POST['Password'];
$number = $_POST['Number'];

// Database connection
$conn = new mysqli('localhost','root','','heyy');
if($conn->connect_error){
    die('connection Failed : '.$conn->connect_error);
}
else{    
    $stmt = $conn->prepare("insert into registration(firstname, lastname, gender, password, number)
    values(?,?,?,?,?)");
 $stmt->bind_param("ssssi",$firstname, $lastname, $gender, $password, $number);
 $stmt->execute();
 echo "registration successfully..";
 $stmt->close();
 $conn->close();   
}
?>