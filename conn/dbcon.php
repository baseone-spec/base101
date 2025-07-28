<?php

// DB connection
$conn = new mysqli("localhost", "username", "password", "baseone_data");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    // Connection successful
    echo "Connected successfully";
}
