<?php


if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset( $_POST['fname']) && isset( $_POST['birth']) && isset( $_POST['address']) && isset( $_POST['password']))
{
    $conn = new mysqli("localhost", "root", "root", "wdd_db");
    $studentsql = "INSERT INTO `student` (`ID`, `Name`, `Email`, `Phone`, `Father Name`, `Birth`, `NRC`, `Address`, `Password`) 
    VALUES (NULL, '" . $_POST["name"] . "','" . $_POST["email"] . "','" . $_POST["phone"] . "','" . $_POST["fname"] . "','" . $_POST["brith"] . "','" . $_POST["nrc"] . "',,'" . $_POST["address"] . "','" . $_POST["password"] . "')";


    $conn->query($studentsql);
    $conn->close();
	

}
?>


