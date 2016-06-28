<?php
 
session_start();
$conn = new mysqli( 'localhost', 'root', '', 'forum' );
  
 if ( $conn->connect_error ) {
    die( 'Connect Error: ' . $conn->connect_errno . ': ' . $conn->connect_error );
}

if(!$_SESSION['forum'] ){
header('location:login.php');

}


if(isset($_POST['submit_form'])){
 $title=$_POST['title'];
 $body=$_POST['body'];
 $date=date('Y-m-d H:i:s');

 
if($title && $body){
  $sql = "INSERT INTO posts(title,body,posted) 
VALUES('{$conn->real_escape_string($_POST['title'])}','{$conn->real_escape_string($_POST['body'])}','$date')";
 if($sql){
echo 'Post added';
}
else{
echo 'Error';
}
}
else{
echo 'Fill the required fields'; 
}

 }

?>
<html>
<head>

<style>
body{
background-color:#85C1E9;
}  


h1{
text-align:center;
}

div#form{
height:700px;
width:500px;
background-color:#ECF0F1;
margin:0px auto;
padding:20px;
align:center;
text-align:center;
border:#999 1px solid;
}

</style>

    </head>

    <body>
           
       <div id="form">
         
       
	<h1>Make a new post</h1>	
	 <form method="POST" action="" >
	 	<p>Title:</p><input type="text" name="title" />
                 
	 	<p>Body:</p>
          <textarea name="body" rows="10" cols="50"></textarea>
          <br>
          <input type="submit" name="submit_form" value="Submit">

        

	 </form>
           
	
          </div>
        
    </body>
</html>