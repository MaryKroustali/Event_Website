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
	$username = $_POST['username'];
	$name = $_POST['name'];
	$email = $_POST['email'];

	$sql = "INSERT INTO users (username, name, email) VALUES('{$username}','{$name}','{$email}')";
 
    # cookie
    $cookie_name = "cookie";
    $cookie_value = $username;
    # set cookie for 10 days
    setcookie($cookie_name, $cookie_value, time() + (86400 * 10), "/");

    # execute query
	mysqli_query($dbConnection, $sql);
?>
    <!--redirect back to html-->
	<script type="text/javascript">
		window.location = "interface5.html";
	</script> 