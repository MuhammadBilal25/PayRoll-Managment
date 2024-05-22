<?php
// Define sample data (you would replace this with data from your database)
$employees = array(
    array("id" => 1, "name" => "John Doe", "email" => "john@example.com", "salary" => "$5000"),
    array("id" => 2, "name" => "Jane Smith", "email" => "jane@example.com", "salary" => "$6000"),
    // Add more employees as needed
);

// Function to search for employee by ID
function searchEmployeeById($id, $employees) {
    foreach ($employees as $employee) {
        if ($employee['id'] == $id) {
            return $employee;
        }
    }
    return null;
}

// Initialize variables
$searchResult = null;

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve input ID
    $searchId = $_POST["searchInput"];
    
    // Search for employee by ID
    $searchResult = searchEmployeeById($searchId, $employees);
}
?>