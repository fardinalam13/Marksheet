<?php
function calculateGPA($totalMarks) {
    if ($totalMarks >= 80) {
        return 'A+';
    } elseif ($totalMarks >= 75) {
        return 'A';
    } elseif ($totalMarks >= 70) {
        return 'A-';
    } elseif ($totalMarks >= 65) {
        return 'B+';
    } elseif ($totalMarks >= 60) {
        return 'B';
    } elseif ($totalMarks >= 55) {
        return 'B-';
    } elseif ($totalMarks >= 50) {
        return 'C+';
    } elseif ($totalMarks >= 45) {
        return 'C';
    } elseif ($totalMarks >= 40) {
        return 'C-';
    } else {
        return 'F';
    }
}

// Example usage:
$totalMarks = 75; // Replace with the actual total marks from your database
$gpa = calculateGPA($totalMarks);

?>
