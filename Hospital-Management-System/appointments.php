<?php
// Include the database connection file
include 'db_connect.php';

// Your code for handling form data goes here
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $patient_id = $_POST['patient_id'];
    $appointment_date = $_POST['appointment_date'];

    // SQL query to insert appointment
    $sql = "INSERT INTO appointments (patient_id, appointment_date) 
            VALUES ('$patient_id', '$appointment_date')";

    // Execute the query and check if the insertion is successful
    if ($conn->query($sql) === TRUE) {
        echo "Appointment booked successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
