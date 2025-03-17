<?php
echo "<h1>HELLO</h1>";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    include 'db_connect.php';
    // SQL query to insert data into the users table
    $sql = "INSERT INTO users (email, username, password) VALUES ($email, $username, $password)";

    // Prepare and bind
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $email, $username, $hashed_password);

    // Execute the query
    if ($stmt->execute()) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}

?>