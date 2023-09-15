<?php
// Database connection parameters
$host = "localhost"; 
$dbUsername = "root"; 
$dbPassword = ""; 
$dbName = "trizalacdb"; 

// Create a connection to the database
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

// Check for database connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['msg_subject'];
    $message = $_POST['message'];

    // Insert data into the database
    $sql = "INSERT INTO enquire (name, email, subject, message) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $name, $email, $subject, $message);

    if ($stmt->execute()) {
        // Send email using SMTP
        ini_set("SMTP", "smtp.example.com"); // Replace with your SMTP server
        ini_set("smtp_port", "587"); // Replace with your SMTP port (e.g., 587 for TLS)
        
        $to = "recipient@example.com"; // Replace with the recipient's email address
        $subject = "New Inquiry";
        $message = "Name: $name\nEmail: $email\nSubject: $subject\nMessage: $message";
        $headers = "From: your@example.com"; // Replace with your sender email
        
        if (mail($to, $subject, $message, $headers)) {
            echo "Message sent successfully!";
        } else {
            echo "Message delivery failed!";
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $stmt->close();
    $conn->close();
}
?>
