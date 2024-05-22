<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Correction Of Name</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <style>
        body{
            font-family: "Poppins", sans-serif;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid white;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #72abbf;
            color: white;
        }
        tr{
            background-color: #e3e3e3;
        }
    </style>
</head>
<body>

    <h1>Student Details</h1>
    <p>To add new students <a href="studentDetails.html">click here</a></p>
    <p>To update students result details <a href="YearOneAddResultDetails.html">click here</a></p>
    <table>
        <thead>
            <tr> 
                <th>S/N</th>
                <th>Student Name</th>
                <th>Matric No</th>
                <th>Department</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
            <?php
            // Database connection details
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "transcript";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // SQL query to fetch user information
            $sql = "SELECT *  FROM student";
            $result = $conn->query($sql);

            $serialNumber = 1;

            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>$serialNumber </td>";
                echo "<td>" . $row["fullName"] . "</td>";
                echo "<td>" . $row["matriculationNumber"] . "</td>";
                echo "<td>" . $row["department"] . "</td>";
                echo "<td><a  href='transcriptPage.php?value=" . $row["matriculationNumber"] . "'>YEAR ONE </a>||
                <a href='transcriptPage.php?value=" . $row["matriculationNumber"] . "'>YEAR TWO </a>||
                <a  href='transcriptPage.php?value=" . $row["matriculationNumber"] . "'>YEAR THREE </a>||
                <a  href='transcriptPage.php?value=" . $row["matriculationNumber"] . "'>YEAR FOUR </a></td>";
                
                
                
                echo "</tr>";
                // Increment the serial number
    $serialNumber++;
            }
            $conn->close();
            ?>
        </tbody>
    </table>
</body>
</html>
