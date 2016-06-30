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
$userlevel=$_GET['userlevel'];

if($userlevel=='2'){
$update="UPDATE reglogin SET userlevel='3' WHERE ID='$id'";
 mysqli_query($conn,$update);
 echo 'User level changed';
}
else if($userlevel=='3'){
$update="UPDATE 'reglogin' SET userlevel='2' WHERE ID='$id'";
mysqli_query($conn,$update);
echo 'User level changed';
}

?>
