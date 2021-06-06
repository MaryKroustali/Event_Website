<?php
	
	# database parameters
	define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '');
	define('DB_DATABASE', 'eventdb');

	$dbhost=DB_SERVER;
	$dbuser=DB_USERNAME;
	$dbpass=DB_PASSWORD;
	$dbname=DB_DATABASE;

	# connect to database
	$dbConnection = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

	# user data
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	$sql = "INSERT INTO messages (name, email, subject, message) VALUES('{$name}','{$email}','{$subject}','{$message}')";

	# execute query
	mysqli_query($dbConnection, $sql);

?>
    <!--redirect back to html-->
	<script type="text/javascript">
		window.location = "interface4.html";
	</script> 