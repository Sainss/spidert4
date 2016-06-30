 <?php
$conn = new mysqli( 'localhost', 'root', '', 'forum' );
  
 if ( $conn->connect_error ) {
    die( 'Connect Error: ' . $conn->connect_errno . ': ' . $conn->connect_error );
  }

    $id=$_GET['idd'];

           $query = "DELETE FROM posts WHERE postid='$id'"; 
           $result = mysqli_query($conn,$query);
       header('location:index.php?id=1');
            


?>