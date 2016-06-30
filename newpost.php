<?php
 
session_start();

if(!$_SESSION['forum'] ){
header('location:login.php');

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
	 <form method="POST" action="addpost.php" >
	 	<p>Title:</p><input type="text" name="title" />
                 
	 	<p>Body:</p>
          <textarea name="body" rows="10" cols="50"></textarea>
          <br>
          <input type="submit" name="submit_form" value="Submit">

        

	 </form>
           
	
          </div>
        
    </body>
</html>