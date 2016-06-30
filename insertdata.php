
<?php

if(!empty($_POST)){

 $conn = new mysqli( 'localhost', 'root', '', 'forum' );
  
 if ( $conn->connect_error ) {
    die( 'Connect Error: ' . $conn->connect_errno . ': ' . $conn->connect_error );
  }


if($_POST['pass']==$_POST['repass'])
{
  $sql = "INSERT INTO reglogin(Name,Emailid,Phone,Username,Password,userlevel)
  VALUES( '{$conn->real_escape_string($_POST['Name'])}', '{$conn->real_escape_string($_POST['email'])}', '{$conn->real_escape_string($_POST['phone'])}', '{$conn->real_escape_string($_POST['user'])}','{$conn->real_escape_string($_POST['pass'])}','3')"; 
   if ($conn->query($sql) === TRUE) {
    echo "Registered successfully.";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
else 
  {
  echo 'The passwords are not matching please enter the details again';
  
 }
}
 $conn->close();


?>