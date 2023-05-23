<?php session_start(); ?>
<?php
    // $dbServername = "localhost";
    // $dbUsername = "root";
    // $dbPassword = "";
    // $dbName = "adventure";

    $dbServername = "localhost";
    $dbUsername = "id20801825_murphytv25";
    $dbPassword = "HALIFAXcanoe22!";
    $dbName = "id20801825_adventure";

    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

    // check connection
    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Document</title>
</head>
<!-- link to nav bar, imprtant to include -->
<?php require 'nav-menubar.php'?>
<body>