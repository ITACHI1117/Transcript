<?php

$year = $_POST["year"];

$host ="localhost";
$dbname = "transcript";
$username = "root";
$password = "";

$connection = mysqli_connect($host, $username, $password, $dbname);

if(mysqli_connect_error()){
    die("Connection error:" . mysqli_connect_error());
}

echo $year;

if($year == "YearOneFirstSemester"){
$matric = $_POST["matric"];
$code1 = $_POST["gss101"];
$code2 = $_POST["Phy101"];
$code3 = $_POST["Gst101"];
$code4 = $_POST["Mth101"];
$code5 = $_POST["Chm101"];
$code6 = $_POST["CIS101"];
$code7 = $_POST["Mth111"];
$code8 = $_POST["Bio151"];
$code9 = $_POST["Phy191"];

// 
    $sql = "INSERT INTO year_one_first_semester (matric, gss101, Phy101, Gst101, Mth101,
    Chm101, CIS101, Mth111, Bio151, Phy191)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_stmt_init($connection);

// Check if the SQL statement is valid
if (!mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_error($connection));
}

// Bind parameters to the SQL statement
mysqli_stmt_bind_param($stmt, "iiiiiiiiii",
    $matric, $code1, $code2, $code3, $code4,
    $code5, $code6, $code7, $code8, $code9);


}elseif($year == "YearOneSecondSemester"){
    $matric = $_POST["matric"];
    $code1 = $_POST["Phy192"];
    $code2 = $_POST["Phy101"];
    $code3 = $_POST["Mth112"];
    $code4 = $_POST["gst102"];
    $code5 = $_POST["Css102"];
    $code6 = $_POST["Sta112"];
    $code7 = $_POST["CIS102"];
    $code8 = $_POST["Mth113"];
    $code9 = $_POST["Phy191"];
    $code10 = $_POST["CIS104"];

    $sql = "INSERT INTO year_one_second_semester (matric, Phy192, Phy101, Mth112, gst102,
    Css102, Sta112, CIS102, Mth113, Phy191, CIS104)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_stmt_init($connection);

// Check if the SQL statement is valid
if (!mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_error($connection));
}

// Bind parameters to the SQL statement
mysqli_stmt_bind_param($stmt, "iiiiiiiiiii",
$matric, $code1, $code2, $code3, $code4,
$code5, $code6, $code7, $code8, $code9,$code10);
}elseif($year == "YearTwoFirstSemester"){
    $matric = $_POST["matric"];
    $code1 = $_POST["Cis221"];
    $code2 = $_POST["CIS201"];
    $code3 = $_POST["CIS263"];
    $code4 = $_POST["CIS261"];
    $code5 = $_POST["Mth204"];
    $code6 = $_POST["Mth207"];
    $code7 = $_POST["gss210"];
    $code8 = $_POST["gss208"];
    $code9 = $_POST["Sta201"];
    $code10 = $_POST["CIS265"];
    $code11 = $_POST["gss211"];
    $code12 = $_POST["CIS213"];

    $sql = "INSERT INTO year_two_first_semester (matric, Cis221, CIS201, CIS263, CIS261,
    Mth204, Mth207, gss210, gss208, Sta201, CIS265, gss211, CIS213)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_stmt_init($connection);

// Check if the SQL statement is valid
if (!mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_error($connection));
}

// Bind parameters to the SQL statement
mysqli_stmt_bind_param($stmt, "iiiiiiiiiiiii",
$matric, $code1, $code2, $code3, $code4,
$code5, $code6, $code7, $code8, $code9,$code10,$code11,$code12);
}elseif($year == "YearTwoSecondSemester"){
    $matric = $_POST["matric"];
    $code1 = $_POST["CIS214"];
    $code2 = $_POST["CIS262"];
    $code3 = $_POST["CIS236"];
    $code4 = $_POST["CIS244"];
    $code5 = $_POST["CIS242"];
    $code6 = $_POST["Mth202"];
    $code7 = $_POST["Mth205"];
    $code8 = $_POST["Sta206"];
    $code9 = $_POST["CIS268"];
    $code10 = $_POST["CIS204"];

    $sql = "INSERT INTO year_two_second_semester (matric, CIS214, CIS262, CIS236, CIS244,
    CIS242, Mth202, Mth205, Sta206, CIS268, CIS204)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_stmt_init($connection);

// Check if the SQL statement is valid
if (!mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_error($connection));
}

// Bind parameters to the SQL statement
mysqli_stmt_bind_param($stmt, "iiiiiiiiiii",
$matric, $code1, $code2, $code3, $code4,
$code5, $code6, $code7, $code8, $code9,$code10);
}elseif($year == "YearThreeFirstSemester"){
    $matric = $_POST["matric"];
    $code1 = $_POST["CIS317"];
    $code2 = $_POST["CIS316"];
    $code3 = $_POST["CIS321"];
    $code4 = $_POST["CIS310"];
    $code5 = $_POST["CIS312"];
    $code6 = $_POST["CIS373"];
    $code7 = $_POST["CIS313"];
    $code8 = $_POST["CIS361"];


    $sql = "INSERT INTO year_three_first_semester (matric, CIS317, CIS316, CIS321, CIS310,
    CIS312, CIS373, CIS313, CIS361)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_stmt_init($connection);

// Check if the SQL statement is valid
if (!mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_error($connection));
}

// Bind parameters to the SQL statement
mysqli_stmt_bind_param($stmt, "iiiiiiiii",
$matric, $code1, $code2, $code3, $code4,
$code5, $code6, $code7, $code8);
}elseif($year == "YearThreeSecondSemester"){
    $matric = $_POST["matric"];
    $code1 = $_POST["CIS372"];
    $code2 = $_POST["CIS325"];
    $code3 = $_POST["CIS322"];
    $code4 = $_POST["CIS320"];
    $code5 = $_POST["CIS324"];
    $code6 = $_POST["CIS362"];  

    $sql = "INSERT INTO year_three_second_semester (matric, CIS372, CIS325, CIS322, CIS320,
    CIS324, CIS362)
    VALUES (?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_stmt_init($connection);

// Check if the SQL statement is valid
if (!mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_error($connection));
}

// Bind parameters to the SQL statement
mysqli_stmt_bind_param($stmt, "iiiiiii",
$matric, $code1, $code2, $code3, $code4,
$code5, $code6);
}elseif($year == "YearFourFirstSemester"){
    $matric = $_POST["matric"];
    $code1 = $_POST["CSC401"];
    $code2 = $_POST["CSC404"];
    $code3 = $_POST["CSC411"];
    $code4 = $_POST["CSC415"];
    $code5 = $_POST["CSC441"];
    $code6 = $_POST["CSC461"];  
    $code7 = $_POST["CSC451"];  
    $code8 = $_POST["CSC400"];  

    $sql = "INSERT INTO year_four_first_semester (matric, CSC401, CSC404, CSC411, CSC415,
    CSC441, CSC461, CSC451, CSC400)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_stmt_init($connection);

// Check if the SQL statement is valid
if (!mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_error($connection));
}

// Bind parameters to the SQL statement
mysqli_stmt_bind_param($stmt, "iiiiiiiii",
$matric, $code1, $code2, $code3, $code4,
$code5, $code6, $code7, $code8);
}elseif($year == "YearFourSecondSemester"){
    $matric = $_POST["matric"];
    $code1 = $_POST["CIS404"];
    $code2 = $_POST["CIS412"];
    $code3 = $_POST["CIS424"];
    $code4 = $_POST["CIS454"];
    $code5 = $_POST["CIS464"];
    $code6 = $_POST["CIS472"];  
    $code7 = $_POST["CIS422"];  


    $sql = "INSERT INTO year_four_second_semester (matric, CIS404, CIS412, CIS424, CIS454,
    CIS464, CIS472, CIS422)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_stmt_init($connection);

// Check if the SQL statement is valid
if (!mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_error($connection));
}

// Bind parameters to the SQL statement
mysqli_stmt_bind_param($stmt, "iiiiiiii",
$matric, $code1, $code2, $code3, $code4,
$code5, $code6, $code7);
}



// Execute the SQL statement
if (mysqli_stmt_execute($stmt)) {
    echo " Record saved";
    if($year == "YearOneFirstSemester"){
        header("location: YearOne2ndAddResultDetails.html");
    }elseif($year == "YearOneSecondSemester"){
        header("location: YearTwoAddResultDetails.html");
    }elseif($year == "YearTwoFirstSemester"){
        header("location: YearTwo2ndAddResultDetails.html");
    }elseif($year == "YearTwoSecondSemester"){
        header("location: YearThreeAddResultDetails.html");
    }elseif($year == "YearThreeFirstSemester"){
        header("location: YearThree2ndAddResultDetails.html");
    }elseif($year == "YearThreeSecondSemester"){
        header("location: YearFourAddResultDetails.html");
    }elseif($year == "YearFourFirstSemester"){
        header("location: YearFour2ndAddResultDetails.html");
    }elseif($year == "YearFourSecondSemester"){
        header("location: AdminView.php");
    }
    
   
} else {
    echo "Error: " . mysqli_stmt_error($stmt);
}

// Close the statement and connection
mysqli_stmt_close($stmt);
mysqli_close($connection);


// $sql = "SELECT * FROM correction_of_name";
// $result = $connection->query($sql);

// if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//         echo "<div>";
//         echo "<p>Application Number: " . $row["applicationNumber"]. "</p>";
//         echo "<p>Matriculation Number: " . $row["matriculationNumber"]. "</p>";
//         echo "</div>";
//     }
// } else {
//     echo "0 results";
// }

