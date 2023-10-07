<?php
// Include the calculate_gpa.php file
include 'calculate_gpa.php';

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_marksheet";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $roll = $_POST["roll"];
    $q1a = $_POST["q1a"];
    $q1b = $_POST["q1b"];
    $q1c = $_POST["q1c"];
    $q1d = $_POST["q1d"];

    $q2a = $_POST["q2a"];
    $q2b = $_POST["q2b"];
    $q2c = $_POST["q2c"];
    $q2d = $_POST["q2d"];

    $q3a = $_POST["q3a"];
    $q3b = $_POST["q3b"];
    $q3c = $_POST["q3c"];
    $q3d = $_POST["q3d"];

    $q4a = $_POST["q4a"];
    $q4b = $_POST["q4b"];
    $q4c = $_POST["q4c"];
    $q4d = $_POST["q4d"];

    $q5a = $_POST["q5a"];
    $q5b = $_POST["q5b"];
    $q5c = $_POST["q5c"];
    $q5d = $_POST["q5d"];

    $q6a = $_POST["q6a"];
    $q6b = $_POST["q6b"];
    $q6c = $_POST["q6c"];
    $q6d = $_POST["q6d"];

    $q7a = $_POST["q7a"];
    $q7b = $_POST["q7b"];
    $q7c = $_POST["q7c"];
    $q7d = $_POST["q7d"];

    $additional_marks = $_POST["additional_marks"];
    $attendance_marks = $_POST["attendance_marks"];

    // Calculate total marks
    $total_marks = $q1a + $q1b + $q1c + $q1d + $q2a + $q2b + $q2c + $q2d + $q3a + $q3b + $q3c + $q3d + $q4a + $q4b + $q4c + $q4d + $q5a + $q5b + $q5c + $q5d + $q6a + $q6b + $q6c + $q6d + $q7a + $q7b + $q7c + $q7d + $additional_marks + $attendance_marks;

    // Calculate GPA
    $gpa = calculateGPA($total_marks);

    // Insert data into the database, including the GPA
    $sql = "INSERT INTO marks (roll, q1a, q1b, q1c, q1d, q2a, q2b, q2c, q2d, q3a, q3b, q3c, q3d, q4a, q4b, q4c, q4d, q5a, q5b, q5c, q5d, q6a, q6b, q6c, q6d, q7a, q7b, q7c, q7d, additional_marks, attendance_marks, total_marks, gpa) 
            VALUES ('$roll', '$q1a', '$q1b', '$q1c', '$q1d', '$q2a', '$q2b', '$q2c', '$q2d', '$q3a', '$q3b', '$q3c', '$q3d', '$q4a', '$q4b', '$q4c', '$q4d', '$q5a', '$q5b', '$q5c', '$q5d', '$q6a', '$q6b', '$q6c', '$q6d', '$q7a', '$q7b', '$q7c', '$q7d', '$additional_marks', '$attendance_marks', '$total_marks', '$gpa')";

    if ($conn->query($sql) === TRUE) {
        // Display a success message
        echo "<h1>Student Marksheet</h1>";
        echo "<h2>Form submitted successfully!</h2>";

        // Query to retrieve data from the marks table
        $sql = "SELECT * FROM marks";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output table header
            echo "<h2>Student Records</h2>";
            echo "<table border='1'>
                <tr>
                    <th>ID</th>
                    <th>Roll</th>
                    <th>Total Marks</th>
                    <th>GPA</th>
                </tr>";

            // Output data from each row
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["roll"] . "</td>";
                echo "<td>" . $row["total_marks"] . "</td>";
                echo "<td>" . $row["gpa"] . "</td>";
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "No records found";
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
}
?>
