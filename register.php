<?php
// Retrieve form data
$username = $_POST['username'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];

// Connect to the database
$host = 'db';
$user = 'root';
$pass = 'yourpassword';
$db = 'register1';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert data into the database
$sql = "INSERT INTO users (username, email,feedback ) VALUES ('$username', '$email', '$feedback')";

if ($conn->query($sql) === TRUE) {
    echo "Feedback successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>