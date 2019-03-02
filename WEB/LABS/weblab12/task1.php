<html>
<head>
<style>
<style>
.mytable {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

.mytable td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

.mytable tr:nth-child(even){background-color: #f2f2f2;}

.mytable tr:hover {background-color: #ddd;}

.mytable th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>
</style>
</head>
<body>
<?php  
$databaseHost = 'localhost';
$databaseName = 'classicmodels';
$databaseUsername = 'root';
$databasePassword = 'seecs@123';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
$sql="select e1.firstName ,e1.lastName,e1.email,e1.jobTitle,o1.addressLine1,o1.addressLine2,e2.firstName as e2FirstName,e2.lastName as e2LastName,e2.jobTitle as e2jobTitle from employees e2 join employees e1 on e2.employeeNumber=e1.reportsTo join offices o1 on e1.officeCode=o1.officeCode";

echo '<table class="mytable" border="1" style="border:solid 1px; border-collapse:collapse">
<thead>
<th>Name</th>
<th>Email</th>
<th>Job Title</th>
<th>Emp Office Address</th>
<th>Reports To</th>
<th>Update</th>
</thead>';
if ($result=mysqli_query($mysqli,$sql)){
  while ($row=mysqli_fetch_assoc($result)){
    echo '<tr><td>'.$row["firstName"].' '.$row["lastName"].'</td><td>'.$row["email"].'</td><td>'.$row["jobTitle"].'</td><td>'.$row["addressLine1"].' '.$row["addressLine2"].'</td><td>'.$row["e2FirstName"].' '.$row["e2LastName"].', '.$row["e2jobTitle"].'</td><td><a href="#">Edit</a> | <a href="#">Delete</a></td></tr>';
  }
  mysqli_free_result($result);
}
echo '</table>';
mysqli_close($mysqli);
?>
</body>
</html>