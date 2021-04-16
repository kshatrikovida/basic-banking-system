<?php
include_once 'includes/dbh.php';
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Banking Web|Transaction Page</title>
	<meta name="viewport" content="width=device-width, initial-scaale=1" >
	<link rel="stylesheet"  href="css/main.css">
	<link rel="stylesheet"  href="css/databaseTable.css">


</head>
<body>

	<div class="main-header">
		
		<header>
		<h1>The Sparks Foundation - GRIP</h1>
		<h1>Transfer Money On the Go!</h1>

		<div class="home-btn">
			<?php
			echo "<a href='index.php'>HOME</a>";
			?>
		</div>

		</header>

	</div>
	<div class="main-body">

		
	<?php
	$from = $_GET['Name'];

		// $conn-> close();
		?>

	<form action="includes/signup.php?Name=$from"   method="POST">
		
		<fieldset>
	<legend>Sender : </legend>
<select id = 'user' name='sender'>
	<?php  
	$sql = "SELECT * FROM details;";
		$result = mysqli_query($conn, $sql);
		$resCheck = mysqli_num_rows($result);

		if($resCheck > 0){

			while($row = mysqli_fetch_assoc($result)){
				$currRow = $row['Name'];
				$rowID = $row['ID'];
				if($currRow==$from){
					echo "<option value=$rowID>".$row['Name']."</option>";
				}
				else
				{continue;}
			}
			echo "</select>";
		}
		else{
			echo "No Result";
		}
?>
</select>


</fieldset><br>
<fieldset>
	<legend>
		Receipient : 
	</legend>
<select id="users" name='recpt'>
	<?php

		$sql = "SELECT * FROM details;";
		$result = mysqli_query($conn, $sql);
		$resCheck = mysqli_num_rows($result);

		if($resCheck > 0){

			while($row = mysqli_fetch_assoc($result)){
				$currRow = $row['Name'];
				$rowID = $row['ID'];
				if($currRow==$from){
					$bal = $row['CurrentBalance'];
					echo "<option value=$currRow disabled>".$row['Name']."(Disabled)"."</option>";
				}
				else
				{echo "<option value=$rowID>".$row['Name']."</option>";}
			}
			echo "</select>";
		}
		else{
			echo "No Result";
		}

		
		// $conn-> close();
		?>
</select>



	</fieldset>
	
<br>
<fieldset>
	<legend>
		Enter Amount Below
	</legend>
	<input type="number" name="amount" id="amt">
</fieldset><br><br>




<button type="submit" name="submit">Transfer Amount</button>

	</form>

	

		


	</div>
	<div class="footer">
<footer>
	<p>
		This is an indivual work for the GRIP Programme - TSF &copy; 2021 by <b>Kovida Samir Kshatri</b>
	</p>
</footer></div>
</body>
</html>