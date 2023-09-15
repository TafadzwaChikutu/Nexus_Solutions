<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirm_password']) && isset($_POST['phone'])) {
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password']; // Corrected variable name
        $phone = $_POST['phone'];

        // Connection to Database

        if (!empty($name) && !empty($surname) && !empty($email) && !empty($password) && !empty($confirm_password) && !empty($phone)) {
            $host = "localhost";
            $dbUsername = "root";
            $dbPassword = "";
            $dbname = "trizalacdb";

            // Connection to database
            $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
            if (mysqli_connect_error()) {
                die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
            } else {
                $SELECT = "SELECT email FROM contact WHERE email = ? LIMIT 1";
                $INSERT = "INSERT INTO contact (name, surname, email, password, `confirm_password`, phone) VALUES (?, ?, ?, ?, ?, ?)";

                $stmt = $conn->prepare($SELECT);
                $stmt->bind_param("s", $email);
                $stmt->execute();
                $stmt->store_result();
                $rnum = $stmt->num_rows;

                if ($rnum == 0) {
                    $stmt->close();

                    $stmt = $conn->prepare($INSERT);
                    $stmt->bind_param("sssssi", $name, $surname, $email, $password, $confirm_password, $phone);
                    $stmt->execute();
                    echo "Successfully Registered";
                } else {
                    echo "Details already exist";
                }
                $stmt->close();
                $conn->close();
            }
        } else {
            echo "All fields are required";
        }
    } else {
        echo "All fields are required";
    }
}
?>
