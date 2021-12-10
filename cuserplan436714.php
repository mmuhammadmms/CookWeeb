<html>
<head>
<title>ThaiCreate.Com PHP & MySQL (mysqli)</title>
</head>
<body>
<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

	include ('connect.php')

	$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);

	$sql = "SELECT * FROM users";

	$query = mysqli_query($conn,$sql);

?>
<table width="600" border="1">
  <tr>
   
    <th width="98"> <div align="center">Name </div></th>
    <th width="198"> <div align="center">Age</div></th>
    <th width="198"> <div align="center">Job </div></th>
    <th width="97"> <div align="center">Email </div></th>
    <th width="59"> <div align="center"> </div></th>
    <th width="71"> <div align="center"> </div></th>
  </tr>
<?php
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
?>
  <tr>
    <td><div align="center"><?php echo $result["CustomerID"];?></div></td>
    <td><?php echo $result["name"];?></td>
    <td><?php echo $result["age"];?></td>
    <td><div align="center"><?php echo $result["job"];?></div></td>
    <td align="right"><?php echo $result["email"];?></td>
    <td align="right"><a href="vplan436714.php?uid=<?php echo $result["userID"];?>">View Plan</a></td>
    <td align="right"><a href="deleteuser436714.php?uid=<?php echo $result["userID"];?>">Delete User</a></td>
  </tr>
<?php
}
?>
</table>
<?php
mysqli_close($conn);
?>
</body>
</html>
