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

$query="SELECT Username , userlevel FROM reglogin WHERE ID='$id'";
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
<?php
if($userlevel ==1){
echo "<a href='admin.php?id=$id'>Admin Panel</a>";
echo '<br>';
echo "<a href='newpost.php'>Create post</a>";

}
else if($userlevel ==2){
echo "<a href='newpost.php'>Create post</a>";

}

else{}

?>
</p>
</body>
</html>
