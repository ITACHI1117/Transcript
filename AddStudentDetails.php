<?php 


$host ="localhost";
$dbname = "transcript";
$username = "root";
$password = "";

$connection = mysqli_connect($host, $username, $password, $dbname);

if(mysqli_connect_error()){
    die("Connection error:" . mysqli_connect_error());
}

$fullName = $_POST["fullName"];
$matriculationNumber = $_POST["matriculationNumber"];
$jambRegNumber = $_POST["jambRegNumber"];
$sex = $_POST["sex"];
$dateOfBirth = $_POST["dateOfBirth"];
$address = $_POST["address"];
$town = $_POST["town"];
$state = $_POST["state"];
$nationality = $_POST["nationality"];
$mobileNo = $_POST["mobileNo"];
$YearOfAdmission = $_POST["YearOfAdmission"];
$programmeType = $_POST["programmeType"];
$department = $_POST["department"];
$maritalStatus = $_POST["maritalStatus"];
$religion = $_POST["religion"];


    $sql = "INSERT INTO student (fullName, matriculationNumber, jambRegNumber, sex, address,
    town, dateOfBirth, state, nationality, mobileNo, YearOfAdmission, programmeType, department, maritalStatus, religion)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_stmt_init($connection);

// Check if the SQL statement is valid
if (!mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_error($connection));
}

// Bind parameters to the SQL statement
mysqli_stmt_bind_param($stmt, "siissssssisssss",
    $fullName, $matriculationNumber, $jambRegNumber, $sex, $address,
    $town, $dateOfBirth, $state, $nationality, $mobileNo, $YearOfAdmission, $programmeType, $department, 
    $maritalStatus,$religion);
    // Execute the SQL statement
if (mysqli_stmt_execute($stmt)) {
    // echo "Record saved";
    header("location: YearOneAddResultDetails.html");
} else {
    echo "Error: " . mysqli_stmt_error($stmt);
}

// Close the statement and connection
mysqli_stmt_close($stmt);
mysqli_close($connection);

?>