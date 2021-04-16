<?php
include_once 'includes/dbh.php';
include_once 'includes/signup.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Banking Web|Success</title>
	<meta name="viewport" content="width=device-width, initial-scaale=1" >
	<link rel="stylesheet"  href="css/main.css">
	<link rel="stylesheet"  href="css/databaseTable.css">

</head>
<body>

	<div class="main-header">
		
		<header>
		<h1>The Sparks Foundation - GRIP</h1>
		<h1>Banking System Transaction Portal</h1>
		<div class="home-btn">
			<?php
			echo "<a href='index.php'>HOME</a>";
			?>
		</div>

		</header>

	</div>
	<div class="main-body">
		<div class="success">
					<?php
		echo "<h1>Payment Successful!</h1>";
		?>
		</div>
<br><br><br><br><br><br><br><br><br><br>

	</div>
	<div class="footer">
<footer>
	<p>
		This is an indivual work for the GRIP Programme - TSF &copy; 2021 by <b>Kovida Samir Kshatri</b>
	</p>
</footer></div>
</body>
</html>