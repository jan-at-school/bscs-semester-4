
<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
$databaseHost = 'localhost';
$databaseName = 'classicmodels';
$databaseUsername = 'root';
$databasePassword = 'seecs@123';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

if(isset($_POST['Submit'])) {	
	$employeeNumber = mysqli_real_escape_string($mysqli, $_POST['employeeNumber']);
	$firstName = mysqli_real_escape_string($mysqli, $_POST['firstName']);
	$lastName = mysqli_real_escape_string($mysqli, $_POST['lastName']);
	$extension = mysqli_real_escape_string($mysqli, $_POST['extension']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$officeCode = mysqli_real_escape_string($mysqli, $_POST['officeCode']);
	$jobTitle = mysqli_real_escape_string($mysqli, $_POST['jobTitle']);
		
		
	// checking empty fields
	if(empty($employeeNumber) ||empty($firstName) || empty($lastName) || empty($email) || empty($extension) || empty($officeCode) || empty($jobTitle)) {
				
		if(empty($employeeNumber)) {
			echo "<font color='red'>Employee number field is empty.</font><br/>";
		}		
		if(empty($firstName)) {
			echo "<font color='red'>First Name field is empty.</font><br/>";
		}
		
		if(empty($lastName)) {
			echo "<font color='red'>Last name field is empty.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
		
		if(empty($extension)) {
			echo "<font color='red'>Extension field is empty.</font><br/>";
		}
		
		if(empty($officeCode)) {
			echo "<font color='red'>Office Code field is empty.</font><br/>";
		}
		
		if(empty($jobTitle)) {
			echo "<font color='red'>Job title field is empty.</font><br/>";
		}
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO employees(employeeNumber,firstName,lastName,extension,jobTitle,officeCode) VALUES('$employeeNumber','$firstName','$lastName','$extension','$jobTitle','$officeCode')");
		
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	}
	
	$mysqli->close();
}
?>
</body>
</html>


