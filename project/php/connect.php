<?php
session_start(); // Start a session

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Connection to Database
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbname = "trizalacdb";

        // Connection to the database
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

        if (mysqli_connect_error()) {
            die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
        } else {
            // Check if the user exists
            $SELECT = "SELECT * FROM contact WHERE email = ? AND password = ?";
            $stmt = $conn->prepare($SELECT);
            $stmt->bind_param("ss", $email, $password);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows == 1) {
                // Login successful
                $_SESSION['email'] = $email; // Store user information in the session
                header("Location: ../index.php"); // Redirect to the index.php page after successful login
                exit();
            } else {
                // Login failed
                echo "Invalid email/username or password.";
            }

            $stmt->close();
            $conn->close();
        }
    } else {
        echo "All fields are required";
    }
}
?>
