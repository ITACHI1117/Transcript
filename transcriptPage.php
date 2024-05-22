<?php

if (isset($_GET['value'])) {
    // Retrieve the value from the URL
    $receivedValue = htmlspecialchars($_GET['value']);
    // Display the received value
    // echo "<p>Received value: " . $receivedValue . "</p>";
} else {
    echo "<p>No value received.</p>";
}

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "transcript";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to get data
$sql = "SELECT * FROM student where matriculationNumber = $receivedValue";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transcript</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>

<h1 style="text-align:center;">Transcript</h1>
<table>
    <?php

while($row = $result->fetch_assoc()) {
  echo "<tr>
  <th>Name</th><td>". $row['fullName'] ."</td>
  <th>Phone</th><td>". $row['mobileNo'] ."</td>
</tr>
<tr>
  <th>Mat No.</th><td>". $row['matriculationNumber'] ."</td>
  <th>Nationality</th><td>". $row['nationality'] ."</td>
</tr>
<tr>
  <th>Address</th><td>". $row['address'] ."</td>
  <th>State of Origin</th><td>". $row['state'] ."</td>
</tr>
<tr>
  <th>Date of Birth</th><td>". $row['dateOfBirth'] ."</td>
  <th>Department</th><td>". $row['department'] ."</td>
</tr>
<tr>
  <th>Degree</th><td>". $row['programmeType'] ."</td>
  <th>Sex</th><td>". $row['sex'] ."</td>
</tr>
<tr>
  <th>Town</th><td>". $row['town'] ."</td>
  <th>Year Of Admission</th><td>". $row['YearOfAdmission'] ."</td>
</tr>
<tr>
  <th>Religion</th><td>". $row['religion'] ."</td>
  <th>Marital Status</th><td>". $row['maritalStatus'] ."</td>
</tr>

";
}
?>
  
</table>

<h2>100 Level First Semester</h2>
<table>
    <tr>
        <th>SN</th>
        <th>CODE</th>
        <th>UNIT</th>
        <th>GRADE</th>
        <th>POINT</th>
        <!-- <th>POINT</th>
        <th>REMARK</th> -->
    </tr>

<?php
 $serialNumber = 1;
$sql = "SELECT * FROM year_one_first_semester where matric = $receivedValue";
$secondResult = $conn->query($sql);
if ($secondResult->num_rows > 0) {
    while($row = $secondResult->fetch_assoc()) {
        echo '<tr>
            <td>1</td>
            <td>Gss 101</td>
            <td>' . $row["gss101"] . '</td>
            <td></td>
            <td></td>

        </tr>';
        echo '<tr>
        <td>2</td>
        <td>Phy 101</td>
        <td>' . $row["Phy101"] . '</td>
        <td></td>
        <td></td>
    </tr>';

    echo '<tr>
        <td>3</td>
        <td>Gst 101</td>
        <td>' . $row["Gst101"] . '</td>
        <td></td>
        <td></td>
    </tr>';
    echo '<tr>
        <td>4</td>
        <td>Mth 101</td>
        <td>' . $row["Mth101"] . '</td>
        <td></td>
        <td></td>
    </tr>';
    echo '<tr>
        <td>5</td>
        <td>Chm 101</td>
        <td>' . $row["Chm101"] . '</td>
        <td></td>
        <td></td>
    </tr>';
    echo '<tr>
        <td>6</td>
        <td>CIS 101</td>
        <td>' . $row["CIS101"] . '</td>
        <td></td>
        <td></td>
    </tr>';
    echo '<tr>
    <td>6</td>
    <td>Mth 111</td>
    <td>' . $row["Mth111"] . '</td>
    <td></td>
    <td></td>
</tr>';
echo '<tr>
<td>6</td>
<td>Bio 151</td>
<td>' . $row["Bio151"] . '</td>
<td></td>
<td></td>
</tr>';
echo '<tr>
<td>6</td>
<td>Phy 191</td>
<td>' . $row["Phy191"] . '</td>
<td></td>
<td></td>
</tr>';
    }
} else {
    echo '<tr><td colspan="7">No records found</td></tr>';
}
?>

</table>

<h2> 100 Level Second Semester</h2>
<table>
    <tr>
    <th>SN</th>
        <th>CODE</th>
        <th>UNIT</th>
        <th>GRADE</th>
        <th>POINT</th>
    </tr>

<?php
$serialNumber = 1;
$sql = "SELECT * FROM year_one_second_semester where matric = $receivedValue";
$secondResult = $conn->query($sql);
if ($secondResult->num_rows > 0) {
    while($row = $secondResult->fetch_assoc()) {
        echo '<tr>
            <td>1</td>
            <td>Phy 192</td>
            <td>' . $row["Phy192"] . '</td>
            <td></td>
            <td></td>

        </tr>';
        echo '<tr>
        <td>2</td>
        <td>Phy 101</td>
        <td>' . $row["Phy101"] . '</td>
        <td></td>
        <td></td>
    </tr>';

    echo '<tr>
        <td>3</td>
        <td>Mth 112</td>
        <td>' . $row["Mth112"] . '</td>
        <td></td>
        <td></td>
    </tr>';
    echo '<tr>
        <td>4</td>
        <td>gst 102</td>
        <td>' . $row["gst102"] . '</td>
        <td></td>
        <td></td>
    </tr>';
    echo '<tr>
        <td>5</td>
        <td>Css 102</td>
        <td>' . $row["Css102"] . '</td>
        <td></td>
        <td></td>
    </tr>';
    echo '<tr>
        <td>6</td>
        <td>Sta 112</td>
        <td>' . $row["Sta112"] . '</td>
        <td></td>
        <td></td>
    </tr>';
    echo '<tr>
    <td>6</td>
    <td>CIS 102</td>
    <td>' . $row["CIS102"] . '</td>
    <td></td>
    <td></td>
</tr>';
echo '<tr>
<td>6</td>
<td>Mth 113</td>
<td>' . $row["Mth113"] . '</td>
<td></td>
<td></td>
</tr>';
echo '<tr>
<td>6</td>
<td>Phy 191</td>
<td>' . $row["Phy191"] . '</td>
<td></td>
<td></td>
</tr>';
echo '<tr>
<td>6</td>
<td>CIS 104</td>
<td>' . $row["CIS104"] . '</td>
<td></td>
<td></td>
</tr>';
    }
} else {
    echo '<tr><td colspan="7">No records found</td></tr>';
}
?>

</table>

<h2>200 Level First Semester</h2>
<table>
    <tr>
    <th>SN</th>
        <th>CODE</th>
        <th>UNIT</th>
        <th>GRADE</th>
        <th>POINT</th>
    </tr>

<?php
$serialNumber = 1;
$sql = "SELECT * FROM year_two_first_semester where matric = $receivedValue";
$secondResult = $conn->query($sql);
if ($secondResult->num_rows > 0) {
    while($row = $secondResult->fetch_assoc()) {
        echo '<tr>
            <td>1</td>
            <td>Cis 221</td>
            <td>' . $row["Cis221"] . '</td>
            <td></td>
            <td></td>

        </tr>';
        echo '<tr>
        <td>2</td>
        <td>CIS 201</td>
        <td>' . $row["CIS201"] . '</td>
        <td></td>
        <td></td>
    </tr>';

    echo '<tr>
        <td>3</td>
        <td>CIS 263</td>
        <td>' . $row["CIS263"] . '</td>
        <td></td>
        <td></td>
    </tr>';
    echo '<tr>
        <td>4</td>
        <td>CIS 261</td>
        <td>' . $row["CIS261"] . '</td>
        <td></td>
        <td></td>
    </tr>';
    echo '<tr>
        <td>5</td>
        <td>Mth 204</td>
        <td>' . $row["Mth204"] . '</td>
        <td></td>
        <td></td>
    </tr>';
    echo '<tr>
        <td>6</td>
        <td>Mth 207</td>
        <td>' . $row["Mth207"] . '</td>
        <td></td>
        <td></td>
    </tr>';
    echo '<tr>
    <td>7</td>
    <td>gss 210</td>
    <td>' . $row["gss210"] . '</td>
    <td></td>
    <td></td>
</tr>';
echo '<tr>
<td>8</td>
<td>gss208</td>
<td>' . $row["gss208"] . '</td>
<td></td>
<td></td>
</tr>';
echo '<tr>
<td>9</td>
<td>Sta 201</td>
<td>' . $row["Sta201"] . '</td>
<td></td>
<td></td>
</tr>';
echo '<tr>
<td>10</td>
<td>CIS 265</td>
<td>' . $row["CIS265"] . '</td>
<td></td>
<td></td>
</tr>';
echo '<tr>
<td>11</td>
<td>gss 211</td>
<td>' . $row["gss211"] . '</td>
<td></td>
<td></td>
</tr>';
echo '<tr>
<td>12</td>
<td>CIS 213</td>
<td>' . $row["CIS213"] . '</td>
<td></td>
<td></td>
</tr>';
    }
} else {
    echo '<tr><td colspan="7">No records found</td></tr>';
}
?>

</table>

<h2>200 Level Second Semester</h2>
<table>
<tr>
    <th>SN</th>
        <th>CODE</th>
        <th>UNIT</th>
        <th>GRADE</th>
        <th>POINT</th>
    </tr>

<?php
$serialNumber = 1;
$sql = "SELECT * FROM year_two_second_semester where matric = $receivedValue";
$secondResult = $conn->query($sql);
if ($secondResult->num_rows > 0) {
    while($row = $secondResult->fetch_assoc()) {
        echo '<tr>
            <td>1</td>
            <td>CIS 214</td>
            <td>' . $row["CIS214"] . '</td>
            <td></td>
            <td></td>

        </tr>';
        echo '<tr>
        <td>2</td>
        <td>CIS 262</td>
        <td>' . $row["CIS262"] . '</td>
        <td></td>
        <td></td>
    </tr>';

    echo '<tr>
        <td>3</td>
        <td>CIS 236</td>
        <td>' . $row["CIS236"] . '</td>
        <td></td>
        <td></td>
    </tr>';
    echo '<tr>
        <td>4</td>
        <td>CIS 244</td>
        <td>' . $row["CIS244"] . '</td>
        <td></td>
        <td></td>
    </tr>';
    echo '<tr>
        <td>5</td>
        <td>CIS 242</td>
        <td>' . $row["CIS242"] . '</td>
        <td></td>
        <td></td>
    </tr>';
    echo '<tr>
        <td>6</td>
        <td>Mth 202</td>
        <td>' . $row["Mth202"] . '</td>
        <td></td>
        <td></td>
    </tr>';
    echo '<tr>
    <td>7</td>
    <td>Mth 205</td>
    <td>' . $row["Mth205"] . '</td>
    <td></td>
    <td></td>
</tr>';
echo '<tr>
<td>8</td>
<td>Sta 206</td>
<td>' . $row["Sta206"] . '</td>
<td></td>
<td></td>
</tr>';
echo '<tr>
<td>9</td>
<td>CIS 268</td>
<td>' . $row["CIS268"] . '</td>
<td></td>
<td></td>
</tr>';
echo '<tr>
<td>10</td>
<td>CIS 204</td>
<td>' . $row["CIS204"] . '</td>
<td></td>
<td></td>
</tr>';
    }
} else {
    echo '<tr><td colspan="7">No records found</td></tr>';
}
?>

</table>

<h2>300 Level First Semester</h2>
<table>
<tr>
    <th>SN</th>
        <th>CODE</th>
        <th>UNIT</th>
        <th>GRADE</th>
        <th>POINT</th>
    </tr>

<?php
$serialNumber = 1;
$sql = "SELECT * FROM year_three_first_semester where matric = $receivedValue";
$secondResult = $conn->query($sql);
if ($secondResult->num_rows > 0) {
    while($row = $secondResult->fetch_assoc()) {
        echo '<tr>
            <td>1</td>
            <td>CIS 317</td>
            <td>' . $row["CIS317"] . '</td>
            <td></td>
            <td></td>

        </tr>';
        echo '<tr>
        <td>2</td>
        <td>CIS 316</td>
        <td>' . $row["CIS316"] . '</td>
        <td></td>
        <td></td>
    </tr>';

    echo '<tr>
        <td>3</td>
        <td>CIS 321</td>
        <td>' . $row["CIS321"] . '</td>
        <td></td>
        <td></td>
    </tr>';
    echo '<tr>
        <td>4</td>
        <td>CIS 310</td>
        <td>' . $row["CIS310"] . '</td>
        <td></td>
        <td></td>
    </tr>';
    echo '<tr>
        <td>5</td>
        <td>CIS 312</td>
        <td>' . $row["CIS312"] . '</td>
        <td></td>
        <td></td>
    </tr>';
    echo '<tr>
        <td>6</td>
        <td>CIS 373</td>
        <td>' . $row["CIS373"] . '</td>
        <td></td>
        <td></td>
    </tr>';
    echo '<tr>
    <td>7</td>
    <td>CIS 313</td>
    <td>' . $row["CIS313"] . '</td>
    <td></td>
    <td></td>
</tr>';
echo '<tr>
<td>8</td>
<td>CIS 361</td>
<td>' . $row["CIS361"] . '</td>
<td></td>
<td></td>
</tr>';
    }
} else {
    echo '<tr><td colspan="7">No records found</td></tr>';
}
?>

</table>

<h2>300 Level Second Semester</h2>
<table>
<tr>
    <th>SN</th>
        <th>CODE</th>
        <th>UNIT</th>
        <th>GRADE</th>
        <th>POINT</th>
    </tr>

<?php
$serialNumber = 1;
$sql = "SELECT * FROM year_three_second_semester where matric = $receivedValue";
$secondResult = $conn->query($sql);
if ($secondResult->num_rows > 0) {
    while($row = $secondResult->fetch_assoc()) {
        echo '<tr>
            <td>1</td>
            <td>CIS 372</td>
            <td>' . $row["CIS372"] . '</td>
            <td></td>
            <td></td>

        </tr>';
        echo '<tr>
        <td>2</td>
        <td>CIS 325</td>
        <td>' . $row["CIS325"] . '</td>
        <td></td>
        <td></td>
    </tr>';

    echo '<tr>
        <td>3</td>
        <td>CIS 322</td>
        <td>' . $row["CIS322"] . '</td>
        <td></td>
        <td></td>
    </tr>';
    echo '<tr>
        <td>4</td>
        <td>CIS 320</td>
        <td>' . $row["CIS320"] . '</td>
        <td></td>
        <td></td>
    </tr>';
    echo '<tr>
        <td>5</td>
        <td>CIS 324</td>
        <td>' . $row["CIS324"] . '</td>
        <td></td>
        <td></td>
    </tr>';
    echo '<tr>
        <td>6</td>
        <td>CIS 362</td>
        <td>' . $row["CIS362"] . '</td>
        <td></td>
        <td></td>
    </tr>';
    }
} else {
    echo '<tr><td colspan="7">No records found</td></tr>';
}
?>

</table>

<h2>400 Level First Semester</h2>
<table>
<tr>
    <th>SN</th>
        <th>CODE</th>
        <th>UNIT</th>
        <th>GRADE</th>
        <th>POINT</th>
    </tr>

<?php
$serialNumber = 1;
$sql = "SELECT * FROM year_four_first_semester where matric = $receivedValue";
$secondResult = $conn->query($sql);
if ($secondResult->num_rows > 0) {
    while($row = $secondResult->fetch_assoc()) {
        echo '<tr>
            <td>1</td>
            <td>CSC 401</td>
            <td>' . $row["CSC401"] . '</td>
            <td></td>
            <td></td>

        </tr>';
        echo '<tr>
        <td>2</td>
        <td>CSC 404</td>
        <td>' . $row["CSC404"] . '</td>
        <td></td>
        <td></td>
    </tr>';

    echo '<tr>
        <td>3</td>
        <td>CSC 411</td>
        <td>' . $row["CSC411"] . '</td>
        <td></td>
        <td></td>
    </tr>';
    echo '<tr>
        <td>4</td>
        <td>CSC 415</td>
        <td>' . $row["CSC415"] . '</td>
        <td></td>
        <td></td>
    </tr>';
    echo '<tr>
        <td>5</td>
        <td>CSC 441</td>
        <td>' . $row["CSC441"] . '</td>
        <td></td>
        <td></td>
    </tr>';
    echo '<tr>
        <td>6</td>
        <td>CSC 461</td>
        <td>' . $row["CSC461"] . '</td>
        <td></td>
        <td></td>
    </tr>';
    echo '<tr>
    <td>7</td>
    <td>CSC 451</td>
    <td>' . $row["CSC451"] . '</td>
    <td></td>
    <td></td>
</tr>';
echo '<tr>
<td>8</td>
<td>CSC 400</td>
<td>' . $row["CSC400"] . '</td>
<td></td>
<td></td>
</tr>';
    }
} else {
    echo '<tr><td colspan="7">No records found</td></tr>';
}
?>

</table>

<h2>400 Level Second Semester</h2>
<table>
<tr>
    <th>SN</th>
        <th>CODE</th>
        <th>UNIT</th>
        <th>GRADE</th>
        <th>POINT</th>
    </tr>

<?php
$serialNumber = 1;
$sql = "SELECT * FROM year_four_second_semester where matric = $receivedValue";
$secondResult = $conn->query($sql);
if ($secondResult->num_rows > 0) {
    while($row = $secondResult->fetch_assoc()) {
        echo '<tr>
            <td>1</td>
            <td>CIS 404</td>
            <td>' . $row["CIS404"] . '</td>
            <td></td>
            <td></td>

        </tr>';
        echo '<tr>
        <td>2</td>
        <td>CIS 412</td>
        <td>' . $row["CIS412"] . '</td>
        <td></td>
        <td></td>
    </tr>';

    echo '<tr>
        <td>3</td>
        <td>CIS 424</td>
        <td>' . $row["CIS424"] . '</td>
        <td></td>
        <td></td>
    </tr>';
    echo '<tr>
        <td>4</td>
        <td>CIS 454</td>
        <td>' . $row["CIS454"] . '</td>
        <td></td>
        <td></td>
    </tr>';
    echo '<tr>
        <td>5</td>
        <td>CIS 464</td>
        <td>' . $row["CIS464"] . '</td>
        <td></td>
        <td></td>
    </tr>';
    echo '<tr>
        <td>6</td>
        <td>CIS4 72</td>
        <td>' . $row["CIS472"] . '</td>
        <td></td>
        <td></td>
    </tr>';
    echo '<tr>
    <td>7</td>
    <td>CIS 422</td>
    <td>' . $row["CIS422"] . '</td>
    <td></td>
    <td></td>
</tr>';

    }
} else {
    echo '<tr><td colspan="7">No records found</td></tr>';
}
?>

</table>

<h2>Signatures</h2>
<table>
<tr>
        <th>CLASS OF DEGREE</th>
        <td>First Class</td>
        <td></td>
    </tr>
    <tr>
        <th>HOD</th>
        <td>SIGNATURE</td>
        <td>_____________________</td>
    </tr>
    <tr>
        <th>EXAM OFFICER</th>
        <td>SIGNATURE</td>
        <td>_____________________</td>
    </tr>
    <tr>
        <th>DEAN</th>
        <td>SIGNATURE</td>
        <td>_____________________</td>
    </tr>
</table>

</body>
</html>

<?php
// Close database connection
$conn->close();
?>
