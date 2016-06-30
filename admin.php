 <?php
session_start();
if(!$_SESSION['forum']){
header('location:login.php');
}

$conn = new mysqli( 'localhost', 'root', '', 'forum' );
  
 if ( $conn->connect_error ) {
    die( 'Connect Error: ' . $conn->connect_errno . ': ' . $conn->connect_error );
  }
$id=$_GET['id'];


$query="SELECT Username , userlevel FROM reglogin WHERE ID=$id";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result);
$username=$row['Username'];
$userlevel=$row['userlevel'];

$query_level="SELECT name FROM userlevel WHERE id='$userlevel'";
$results=mysqli_query($conn,$query_level);
$run=mysqli_fetch_array($results);

$name=$run['name'];

?>

<html>
<head>

</head>

<body>

<h3>Your Profile</h3>
<p> You are logged in as <b><?php echo $username; ?></b>[<?php echo $name; ?>]</p>
<p>
You can change the userlevels by clicking on the current levels.
</p>

<table>
<tr><td width='150px'>Users  Userlevel</td></tr>
<?php
$query="SELECT * FROM reglogin ";
$result=mysqli_query($conn,$query);
while ($row = mysqli_fetch_array($result)){
?>
<table>


<td> </td><td><?php echo $row[4];?></td>
<td> </td><td>
<?php 
if($row[6]==1)
{ echo ' Admin';
}
else if($row[6]==2)
{
echo " <a href='change.php?id=$row[0]&userlevel=$row[6]'>Editor</a>";
}
else{
echo " <a href='change.php?id=$row[0]&userlevel=$row[6]'>Viewer</a>";
}
?></td>
</tr>
<?php
}
?>
</table>
</body>
</html>
