<?php

//connecting to database//
//put your own details here//
$host = 'sql305.epizy.com';
$dbname = 'epiz_34039583_XXX';
$username = 'epiz_34039583';
$password = 'KgQ8qKplhGi9x';

//use this order//
$conn = mysqli_connect ($host, $username, $password, $dbname);

//if there is an error it will print out the error//
if (mysqli_connect_errno()) {
    die("Connection error " . mysqli_connect_errno());
}

//otherwise we will be pulling data from the table//
//inserting values into the page//
//"responses" is the name of my table//
// "*" is everything in PHP//
$sql = "SELECT * FROM responses;";
//creating results variable with the data from the table
$result = mysqli_query($conn, $sql);
//checking to see if we got any results//
$resultCheck = mysqli_num_rows($result);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>survey submissions</title>
</head>
<body>
    <h1>Survey Submissions</h1>
    <ul>
        <?php
        //if we get something then we go to the while loop that will put the data into the variable "row"//
        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<li>' . $row['name'] . "</li>";
            }
        }
        ?>

    </ul>
</body>
</html>