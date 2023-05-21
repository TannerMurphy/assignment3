<?php include "header.php" ?>
	<div id="welcomeBox">
		<h1>Please enter your email to create an account</h1>
		<br> 
		<!-- submit email to recieve assistance -->
		<form method="post" action="send-email.php">
			<input type="text" name="emailAccount" value ="email" required>
			<button type="submit" class="blueButton" name="sumbit">Submit</button>
			<br>
		</form>
	</div>
<?php include "footer.php" ?>
