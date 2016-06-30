 <?php
$conn = new mysqli( 'localhost', 'root', '', 'forum' );
  
 if ( $conn->connect_error ) {
    die( 'Connect Error: ' . $conn->connect_errno . ': ' . $conn->connect_error );
  }
if(isset($_POST['delete'])){
    $id=$_POST['id'];
           $query = "DELETE FROM posts WHERE id='$id'"; 
           $result = mysqli_query($conn,$query);

            header('location:index.php?id=1');

}
?>
