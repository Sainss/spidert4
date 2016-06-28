 <?php
session_start();
if(!$_SESSION['forum']){
header('location:login.php');

}
$conn = new mysqli( 'localhost', 'root', '', 'forum' );
  
 if ( $conn->connect_error ) {
    die( 'Connect Error: ' . $conn->connect_errno . ': ' . $conn->connect_error );
  
  
}

$username=$_GET['username'];
$userlevel=$_GET['userlevel'];

if($userlevel=='2'){
$update="UPDATE reglogin SET userlevel='3' WHERE Username='$username'";
 mysqli_query($conn,$update);
}
else if($userlevel=='3'){
$update="UPDATE 'reglogin' SET userlevel='2' WHERE Username='$username'";
mysqli_query($conn,$update);
}

?>