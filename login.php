<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Add your database connection code here
    $servername = "localhost";
    $db_username = "your_db_username";
    $db_password = "your_db_password";
    $dbname = "your_database_name";

    // Create connection
    $conn = new mysqli($servername, $db_username, $db_password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to check if the provided username and password match in the database
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Redirect to dashboard or another page upon successful login
        header("Location: dashboard.php");
        exit();
    } else {
        // Display error message if login fails
        echo "Invalid username or password. Please try again.";
    }

    $conn->close();
}
?>
