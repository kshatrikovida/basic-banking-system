

<?php
	include_once 'dbh.php';
	
	if (isset($_POST['submit'])) {
		# code...
	$sender = $_POST['sender'];
	$amount = $_POST['amount'];	
	$recpt = $_POST['recpt'];
	$sql3 = "SELECT * FROM details WHERE ID = $sender";
	$result = mysqli_query($conn, $sql3);
	$row = mysqli_fetch_array($result);
	$currRow = $row['Name'];
	$currBal = $row['CurrentBalance'];
	if($amount == 0){
		echo "<script>
		alert('Zero Values Cannot be Transferred!');
		window.location='../transferMoney.php?Name=$currRow';
	</script>";
	}
	else if($amount<0){

		echo "<script>
		alert('Negative Values Cannot be Transferred!');
		window.location='../transferMoney.php?Name=$currRow';
	</script>";
		
	}

	else if($amount>$currBal){
		echo "<script>
		alert('Insufficient Balance! Try entering a smaller value');
		window.location='../transferMoney.php?Name=$currRow';
	</script>";	
		
	}
else
{$sql1 = "UPDATE details SET CurrentBalance = CurrentBalance-$amount WHERE ID = $sender";
$sql2 = "UPDATE details SET CurrentBalance = CurrentBalance+$amount WHERE ID = $recpt";
mysqli_query($conn, $sql1);
mysqli_query($conn, $sql2);
echo "<script>
		alert('Transaction Successful!');
		window.location='../submission.php';
	</script>";	


}
};
?>