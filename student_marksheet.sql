-- Create a new database named student_marksheet with the desired character set
CREATE DATABASE IF NOT EXISTS student_marksheet CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- Switch to the newly created database
USE student_marksheet;

-- Create a table for storing student marks
CREATE TABLE IF NOT EXISTS marks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    roll VARCHAR(20) NOT NULL,
    q1a INT NOT NULL,
    q1b INT NOT NULL,
    q1c INT NOT NULL,
    q1d INT NOT NULL,

    q2a INT NOT NULL,
    q2b INT NOT NULL,
    q2c INT NOT NULL,
    q2d INT NOT NULL,

    q3a INT NOT NULL,
    q3b INT NOT NULL,
    q3c INT NOT NULL,
    q3d INT NOT NULL,

    q4a INT NOT NULL,
    q4b INT NOT NULL,
    q4c INT NOT NULL,
    q4d INT NOT NULL,

    q5a INT NOT NULL,
    q5b INT NOT NULL,
    q5c INT NOT NULL,
    q5d INT NOT NULL,

    q6a INT NOT NULL,
    q6b INT NOT NULL,
    q6c INT NOT NULL,
    q6d INT NOT NULL,

    q7a INT NOT NULL,
    q7b INT NOT NULL,
    q7c INT NOT NULL,
    q7d INT NOT NULL,
    
    additional_marks INT NOT NULL,
    attendance_marks INT NOT NULL,
    total_marks INT NOT NULL,
    gpa VARCHAR(5) NOT NULL
);

-- Sample data (you can add more data as needed)
INSERT INTO marks (roll, q1a, q1b, q1c, q1d, q2a, q2b, q2c, q2d, q3a, q3b, q3c, q3d, q4a, q4b, q4c, q4d, q5a, q5b, q5c, q5d, q6a, q6b, q6c, q6d, q7a, q7b, q7c, q7d, additional_marks, attendance_marks, total_marks, gpa)
-- VALUES
    -- ('1001', 4, 4, 2, 0, 0, 0, 0, 0, 0, 5, 2, 0, 0, 5, 0, 0, 0, 5, 2, 0, 5, 0, 2, 0, 5, 0, 2, 0, 0, 23, 9, 75),
    -- ('1002', 2, 5, 0, 2, 5, 3, 2, 3, 3, 5, 0, 2, 4, 5, 0, 2, 2, 5, 2, 0, 0, 5, 0, 2, 5, 3, 2, 0, 0, 25, 4, 98);

-- Set the database character set (optional)
-- ALTER DATABASE student_marksheet CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
