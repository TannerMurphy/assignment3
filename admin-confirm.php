<?php include "header.php" ?>

<?php	
	// Definining the variables from the post
	$heading = "";
	$tripDate = "";
	$duration = "";
	$summary = "";
	
	$heading = $_POST["heading"];
    $tripDate = $_POST["trip_date"];
    $duration = $_POST["duration"];
    $summary= $_POST["summary"];

	// inserting data into table
	// $sql = "INSERT INTO adventure (adventure_heading, adventure_trip_date, adventure_dutation, adventure_summary) VALUES ('$heading', '$tripDate', '$duration', '$summary')";
	$sql = "INSERT INTO `adventure`(`adventure_heading`, `adventure_trip_date`, `adventure_duration`, `adventure_summary`) VALUES ('$heading','$tripDate','$duration','$summary')";
	mysqli_query($conn, $sql);

?>


	<div id="welcomeBox">
		<h1>Admin - Confirm</h1> 
		<br>
        <!-- After information is submitted, can click on button to check out all adventures -->
		<a href='all-adventures.php'>View all Adventures</a>
	</div>
<?php include "footer.php" ?>