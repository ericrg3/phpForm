<?php

//creating variables with form inputs//
$name = $_POST["name"];
$carID = $_POST["carID"];
$makeID = $_POST["makeID"];
$modelID = $_POST["modelID"];
$trimID = $_POST["trimID"];
$bodyStyleID = $_POST["bodyStyleID"];
$year = $_POST["year"];
$prefer = $_POST["prefer"];
$favorite = $_POST["favorite"];
$comments = $_POST["comments"];

//code to test to see if the values are succesfully being entered into the variables//
//var_dump($name, $gradterm, $major, $minor, $favorite, $improve, $comments);

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

//otherwise we will be inserting data into the table//
//inserting values into the table in the database//
//"responses" is the name of my table//
$sql = "INSERT INTO responses (name, carID, makeID, ModelID, trimID, bodyStyleID, year, prefer, favorite, comments)
VALUES ('$name', '$carID', '$makeID', '$modelID', '$trimID', '$bodyStyleID', '$year', '$prefer', '$favorite', '$comments')";

//if connection is succesful it will print response saved//
if ($conn->query($sql) === TRUE) {
    echo "response saved";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

//close the connection with database//
$conn->close();
?>