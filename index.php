<?php
 
session_start();
if(!$_SESSION['forum']){
header('location:login.php');


}

$id=$_GET['id'];

?>


<html>
<head>
<style>

body{
background:url(back.jpg);

}

#container{
padding:10px;
width:800px;
margin:auto;
background:white;
}

#menu{
 height:40px;
 line-height:40px;
}

#menu ul{
 margin:0px;
 padding:0px;
 text-decoration:none;
}

#menu ul li{
 display:inline;
 list-style:none;
 margin-right:10px;
 font-size:18px;
}

#content{
  clear:both;
  margin-top:5px;
  font-size:25px;
}

#header{
  height:80px;
  line-height:80px;
}

#container #header h1{
   font-size:40px;
   margin:0px;
   position:relative;
top:50%;
-webkit-transform: translateY(-50%);
-ms-transform: translateY(-50%);
transform: translateY(-50%);

#delete{
align:right;
}
}
</style>
<body>
<div id="container">
 <div id="header">
   <h1>Welcome to bulletin board</h1>
 </div>

  <div id="menu">
   <ul>
        <li><a href="login.php">Home</a></li>
         <li><a href="profile.php?id=<?php echo $id; ?>">User options</a></li>
        <li><a href="logout.php">Logout</a></li>
   </ul>
  </div>

  <div id="content">
     

<center><h1><u>Posts</u></h1></center>


<?php
 $conn = new mysqli( 'localhost', 'root', '', 'forum' );
  
 if ( $conn->connect_error ) {
    die( 'Connect Error: ' . $conn->connect_errno . ': ' . $conn->connect_error );
 
  
}
$quer="SELECT * FROM reglogin WHERE ID='$id'";
$resul=mysqli_query($conn,$quer);
$run=mysqli_fetch_array($resul);
$userlevel=$run[6];
$query="SELECT * FROM posts ";
$result=mysqli_query($conn,$query);
while ($row = mysqli_fetch_array($result)){
if($userlevel==1){
echo " <a href='delete.php?idd=$row[0]'>Delete</a>";

}
?>
<table style=" border:1px solid silver" cellpadding="5px" cellspacing="0px"
align="center" border="1">
<tr>
<td colspan="4" style="background:#0066FF; color:#FFFFFF; font-size:20px">Post
 <?php echo $row[0]; ?></td></tr>
<tr> 

<td> Title</td><td><?php echo $row[1];?></td>
</tr>
<tr>
<td>Description</td><td><?php echo $row[2];?></td>
</tr>
<tr>
<td>Posted at</td><td><?php echo $row[3];?></td>
<tr> 


</table>



<?php

echo '<br>';
}



?>



  </div>
</body>
</html>
