<?php
include 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$department = $_POST['department'];
$salary = $_POST['salary'];

$sql = "INSERT INTO employees (name, email, phone, department, salary) VALUES ('$name', '$email', '$phone', '$department', '$salary')";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error: " . $conn->error;
}
?>
