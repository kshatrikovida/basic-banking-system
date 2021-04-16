<?php
include_once 'includes/dbh.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Banking Web|ProceedTransaction</title>
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

		<table>
			<tr>
				<th>
					ID
				</th>
				<th>
					Name
				</th>
				<th>
					Email
				</th>
				<th>
					Contact Number
				</th>
				<th>
					Current Balance
				</th>
				<th>
					Transaction
				</th>
			</tr>

	<?php

		$sql = "SELECT * FROM details;";
		$result = mysqli_query($conn, $sql);
		$resCheck = mysqli_num_rows($result);

		if($resCheck > 0){

			while($row = mysqli_fetch_assoc($result)){
				$currRow = $row['Name'];
				echo "<tr><td>".$row['ID']."</td><td>".$row['Name']."</td><td>".$row['Email']."</td><td>".$row['ContactNumber']."</td><td>".$row['CurrentBalance']."</td><td id='transaction'><a href='transferMoney.php?Name=$currRow'>"."Make a Transaction"."</a></td></tr>";
			}
			echo "</table>";
		}
		else{
			echo "No Result";
		}

		$conn-> close();
		?>


		</table>

		


	</div>
	<div class="footer">
<footer>
	<p>
		This is an indivual work for the GRIP Programme - TSF &copy; 2021 by <b>Kovida Samir Kshatri</b>
	</p>
</footer></div>
</body>
</html>