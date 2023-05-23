<?php include "header.php" ?>
	
	<div id="welcomeBox">
		<h1>Admin - Add Adventure</h1>
        <h2>Input details about the trip</h2>
		<br>
        <!-- Form to fill in information to help guide the system where it needs to go -->
	<form method="POST" action="admin-confirm.php">
        <!-- heading -->
        <label for="heading">HEADING:</label><br>
        <input type="text" name="heading" placeholder="Heading" required style="width:170px;">
        <br><br>
        <!-- date -->
        <label for="trip_date">TRIP DATE:</label><br>
        <input type="date" name="trip_date" required>
        <br><br>
        <!-- duration -->
        <label for="duration">DURATION:</label><br>
        <input type="text" name="duration" placeholder="Duration" required style="width:170px;">
        <br><br>
        <!-- summary -->
        <label for="summary">SUMMARY:</label><br>
        <textarea name="summary" rows="5" cols="50">
        </textarea>
        <br><br>
        <!-- submit form to admin-confirm.php -->
        <button type="submit" class="blueButton" name="submit">Submit</button>
    </form>
	</div> 
<?php include "footer.php" ?>