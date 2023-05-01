<?php

//creating variables with form inputs//
$name = $_POST["name"];
$gradterm = $_POST["gradterm"];
$major = $_POST["major"];
$minor = $_POST["minor"];
$favorite = $_POST["favorite"];
$improve = $_POST["improve"];
$comments = $_POST["comments"];

//code to test to see if the values are succesfully being entered into the variables//
//var_dump($name, $gradterm, $major, $minor, $favorite, $improve, $comments);

//connecting to database//
//put your own details here//
$host = 'sql111.epizy.com';
$dbname = 'epiz_34038543_survey';
$username = 'epiz_34038543';
$password = 'LRXCPHVGpY';

//use this order//
$conn = mysqli_connect ($host, $username, $password, $dbname);

//if there is an error it will print out the error//
if (mysqli_connect_errno()) {
    die("Connection error " . mysqli_connect_errno());
}

//otherwise we will be inserting data into the table//
//inserting values into the table in the database//
//"responses" is the name of my table//
$sql = "INSERT INTO responses (name, gradterm, major, minor, favorite, improve, comments)
VALUES ('$name', '$gradterm', '$major', '$minor', '$favorite', '$improve', '$comments')";

//if connection is succesful it will print response saved//
if ($conn->query($sql) === TRUE) {
    echo "response saved";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

//close the connection with database//
$conn->close();
?>