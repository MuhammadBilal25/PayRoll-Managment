// Dummy data (you would replace this with actual data retrieval from database)
const dummyData =fetch("")

// Function to display payslip
function showPayslip(data) {
    document.getElementById('basic_salary').textContent = data.basic_salary;
    document.getElementById('allowance').textContent = data.allowance;
    document.getElementById('tax').textContent = data.tax;
    document.getElementById('total').textContent = data.basic_salary + data.allowance - data.tax;
    document.getElementById('payslip').style.display = 'block';
}

// Dummy function to simulate data retrieval from server
function fetchData(employeeID, employeeName) {
    // Here you would make an AJAX request to your server to fetch the actual data
    // For this example, we'll just use dummyData
    showPayslip(dummyData);
}

// Event listener for form submission
document.querySelector('form').addEventListener('submit', function (event) {
    event.preventDefault(); // Prevent form submission
    const employeeID = document.getElementById('employee_id').value;
    const employeeName = document.getElementById('employee_name').value;
    fetchData(employeeID, employeeName);
});