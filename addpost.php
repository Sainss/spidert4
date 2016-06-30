<?php

$conn = new mysqli( 'localhost', 'root', '', 'forum' );
  
 if ( $conn->connect_error ) {
    die( 'Connect Error: ' . $conn->connect_errno . ': ' . $conn->connect_error );
}

$title=$_POST['title'];
$body=$_POST['body'];
 $date=date('Y-m-d H:i:s');

  $sql = "INSERT INTO posts(title,body,posted) VALUES('$title','$body','$date')";
 if ($conn->query($sql) === TRUE) {
    echo "New post added successfully.";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
 }





?>