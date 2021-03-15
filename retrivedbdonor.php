<html>
<head>
<title>display data into db</title>
<style type="text/css">
table{
border:2px solid red;
background-color:#FFC;
}
th{
border-bottom:5px solid #000;
}
td{
border-bottom:2px solid #666;
}
</style>
</head>
<body>
<h1>display data from db</h1>
<?php
$dbcon=mysql_connect(DB_HOST,DB_USER,DB_PSWD,DB_NAME);
include('connectsql.php');
$sqlget="SELECT * FROM donor2";
$sqldata=mysqli_query($dbcon,$sqlget) or die('error getting data');
echo "<table>";
echo "<tr><th>id</th><th>Firstname></th><th>Lastname</th><th>Age</th><th>gender</th><th>BloodGroup</th><th>HealthCondition</th><th>ContactNumber</th><th>Address</th><th>email</th></tr>
while($row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC)) {
echo "<tr><td>";
echo $row['id'];
echo "</td><td>";
echo $row['Firstname'];
echo "</td><td>";
echo $row['Lastname'];
echo "</td><td>";
echo $row['Age'];
echo "</td><td>";
echo $row['gender'];
echo "</td><td>";
echo $row['BloodGroup'];
echo "</td><td>";
echo $row['HealthCondition'];
echo "</td><td>";
echo $row['ContactNumber'];
echo "</td><td>";
echo $row['Address'];
echo "</td><td>";
echo $row['email'];
echo "</td><td>";
}
echo "</table>";
?>

</body>
</html>




