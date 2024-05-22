<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $fatherName = $_POST["fatherName"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $cnic = $_POST["cnic"];
    $address = $_POST["address"];
    $rank = $_POST["rank"];
    $department = $_POST["department"];
    $contact = $_POST["contact"];
    $joiningDate = $_POST["joiningDate"];
    $email = $_POST["email"];

    // Perform any necessary validation

    // Process the form data (e.g., store in a database)

    // For demonstration purposes, we'll just display the submitted data
    echo "<h2>Submitted Data:</h2>";
    echo "<p>Name: $name</p>";
    echo "<p>Father's Name: $fatherName</p>";
    echo "<p>Date of Birth: $dob</p>";
    echo "<p>Gender: $gender</p>";
    echo "<p>CNIC: $cnic</p>";
    echo "<p>Address: $address</p>";
    echo "<p>Rank: $rank</p>";
    echo "<p>Department: $department</p>";
    echo "<p>Contact: $contact</p>";
    echo "<p>Joining Date: $joiningDate</p>";
    echo "<p>Email: $email</p>";

    // You can redirect the user to another page after form submission if needed
    // header("Location: success.php");
    // exit();
}
?>