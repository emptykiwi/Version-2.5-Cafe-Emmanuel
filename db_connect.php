<?php
// CRITICAL: Disable MySQLi exceptions before any DB connection attempt.
// This prevents unhandled database errors (like missing columns) from causing a 500 error.
mysqli_report(MYSQLI_REPORT_OFF);

// Database configuration
$host = "localhost";
$user = "u763865560_Mancave";
$password = "ManCave2025";
$database = "u763865560_EmmanuelCafeDB";

// Create connection
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set charset to ensure special characters display correctly
$conn->set_charset("utf8mb4");