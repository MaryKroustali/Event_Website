<html>
	<head>
		<title>Era - Διοργάνωση Συνεδριών</title>
		<!--favicon-->
		<link rel="shortcut icon" href="images/logo.png"/>
		<!--external css-->
		<link rel="stylesheet" type="text/css" href="style.css">
		<!--responsive design-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--utf-8 encoded-->
		<meta charset="UTF-8">
		<!--icons-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!--external js-->
		<script src="cost.js" type="text/javascript"></script>
		<style>
			section {
				margin: 0;
				width: 100%;
			}
			section h1 {
				margin: 50px 0 30px 14%;
			}
			form {
				background-image: url('congress.jpg');
				padding: 20px 0 5% 0; 
			}
			form p {
				color: white;
			}
			.table {
				display: flex;  /*centralize table*/
				justify-content: center;
			}
			table {
				width: 50%;
				margin: 3% 0;
				border-spacing: 0px;
				text-align: center;
			}
			td {  /*each table cell*/
				padding: 0.5%;
				font-size: 100%;
			}
			tr:nth-child(2n+3) {
				background-color: #f7ebee;
		    }
			th {  /*each column title*/
				padding: 10px 3%;
				background-color: #AB3A54;
				color: #f7ebee;
			}
			@media (max-width: 1080px) and (min-width: 768px) {
				th {  /*each column title*/
					padding: 10px 0%;
				}
			}
			@media (max-width: 768px) { 
				table {
					width: 100%;
					margin: 13% 0;
				}
				th {  /*each column title*/
					padding: 10px 0%;
				}
			}
		</style>
	</head>
	<body>
		<!--navigation bar-->
		<nav>
		<img src="images/logo.png">
		<ul>
			<li>
				<!--Home page sections-->
				<div class="dropmenu">
					<a href="interface1.html">
						Αρχική
						<!--down arrow-->
						<i class="fa fa-angle-down"></i>
					</a>
					<div class="drop">
						<a href="interface1.html#who">Ποιοι είμαστε?</a>
						<a href="interface1.html#services">Οι Yπηρεσίες μας</a>
						<a href="interface1.html#gallery">Gallery</a>
					</div>
				</div>
			</li>
			<li>
				<!--Company sections-->
				<div class="dropmenu"> 
					<a href="interface2.html">
						Η Εταιρεία μας
						<!--down arrow-->
						<i class="fa fa-angle-down"></i>
					</a>
					<div class="drop">
						<a href="interface2.html#about">Σχετικά με εμάς</a>
						<a href="interface2.html#newsletter">Εγγραφή στο Newsletter</a>
					</div>
				</div>
			</li>
			<li>
				<a href="interface3.html">Υπολογισμός Κόστους Παροχής Υπηρεσιών</a>
			</li>
			<li>
				<a href="interface4.html">Επικοινωνία</a>
			</li>
			<li>
				<a href="interface5.html">Newsletter</a>
			</li>
		</ul>
	</nav>

	<section>
		<h1>ΧΡΗΣΤΕΣ</h1>
		<div class="table">
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

				$sql = "SELECT * FROM users";

				# execute query
				$result = mysqli_query($dbConnection, $sql);

			?>
			<?php echo "<table border='1'>
				<tr>
				<th>Username</th>
				<th>Όνομα</th>
				<th>Email</th>
				</tr>";

			   while($data = mysqli_fetch_row($result))
			    {
			    	echo "<tr>";
			    	echo "<td>$data[0]</td>";
			    	echo "<td>$data[1]</td>";
			    	echo "<td>$data[2]</td>";
			    	echo "</tr>";
			    }?>
			</table>
		</div>
	</section>
	

	<!--footer-->
	<footer>
		<p><img src="images/logo.png">ERA LTD, 2020 &copy;</p>
	</footer>
	</body>
</html>