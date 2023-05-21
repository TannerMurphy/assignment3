<?php include "header.php"?>


<?php	
	// Definining the variables from the post
    $title = "";
	$firstName = "";
	$lastName = "";
	$role = "";
	
	$title = $_POST["title"];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $role = $_POST['role'];

	$_SESSION['title'] = $title;
	$_SESSION['firstName'] = $firstName;
	$_SESSION['lastName'] = $lastName;
	$_SESSION['role'] = $role;

?>

<div id="welcomeBox">
	<?php
        // Using the varaibles to customize who is asking for help
        echo "<h1> Welcome ". $_SESSION['title'] ." ". $_SESSION['firstName']." ". $_SESSION['lastName'] ." (". $_SESSION['role'] . ")  </h1><br>";
		echo "<h1> What can I help you with?</h1><br>";
        // customizing the message based on the role for more specific help
        if ($_SESSION['role'] =="Admin") {
            echo "<a href='new-account.php'>New account</a><br><a href='isnt-working.php'>Computer not working</a><br><a href='admin-add.php'>Add Adventure</a> ";
        }
        
        if ($_SESSION['role'] =="Manager") {
            echo "<a href='lost-password.php'>Lost password</a><br><a href='isnt-working.php'>Computer not working</a>";
        }
        
        if ($_SESSION['role'] =="CEO") {
            echo "<a href='need-help.php'>Need Help</a><br><a href='isnt-working.php'>Computer not working</a>";
        }

    ?>
</div>

<?php include "footer.php" ?>
