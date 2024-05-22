<?php
// Start session
session_start();

// Connect to your MySQL database
$mysqli = new mysqli("localhost", "root", "", "transcript");

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Retrieve user input
$username = $_POST['username'];
$password = $_POST['password'];
$status = $_POST['status']; // Assuming the status is sent from the frontend

// Initialize variables to store user details
$id = $username;
$firstname = "";
$lastname = "";

// Prepare SQL statement based on the user status
if ($status === "student") {
    $sql = "SELECT id, matric, firstname, lastname, password FROM user WHERE matric = ?";
    // Prepare SQL statement to retrieve hashed password
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("s", $matric);
} elseif ($status === "Admin") {
    // Directly retrieve the password for Admin
    $sql = "SELECT password FROM user WHERE id = 0";
    $result = $mysqli->query($sql);
    if ($result) {
        $row = $result->fetch_assoc();
        $retrivedPassword = $row['password'];
        // Verify the password
        if ($retrivedPassword === $password) { 
            // Password is correct, start a new session
            $_SESSION["loggedin"] = true;
            $_SESSION["status"] = "Admin";
            $_SESSION["username"] = $username;
            echo $username;
            echo $retrivedPassword;
            // Redirect Admin to their dashboard
            header("location: AdminView.php");
            exit();
        } else {
            echo '<script type="text/javascript">alert("Form submission failed!");</script>';
            // Redirect user back to login page with error message
            // header("location: userLogin.php?error=invalid_credentials");
            exit();
        }
    } else {
        // Handle database query error
        header("location: userLogin.php?error=db_error");
        exit();
    }
} else {
    // Handle invalid status
    header("location: loginError.html?error=invalid_credentials");
    exit();
}

// Execute the statement
$stmt->execute();

// Bind the result
$stmt->bind_result($id, $username, $firstname, $lastname, $hashed_password);

// Fetch the result
$stmt->fetch();

// Verify the password
if ($status === "student" && password_verify($password, $hashed_password)) {
    // Password is correct, start a new session

    // Store data in session variables
    $_SESSION["loggedin"] = true;
    $_SESSION["status"] = "Student";
    $_SESSION["id"] = $id;
    $_SESSION["username"] = $username;
    $_SESSION["firstname"] = $firstname;
    $_SESSION["lastname"] = $lastname;

    echo $id;
    echo $username;
    echo $firstname;
    echo $lastname;

    // Redirect user to home page
    header("location: AdminView.php");
} else {
    // Redirect user back to login page with error message
    header("location: index.html?error=invalid_credentials");
}

// Close the statement and connection
$stmt->close();
$mysqli->close();
?>
