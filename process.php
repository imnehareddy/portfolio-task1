<?php

$conn = mysqli_connect("localhost", "root", "", "portfolio_db");

if (!$conn) {
  die("Connection failed");
}

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO users (name, email, message)
        VALUES ('$name', '$email', '$message')";

if (mysqli_query($conn, $sql)) {
  echo "Data saved successfully!";
} else {
  echo "Error: " . mysqli_error($conn);
}

?>