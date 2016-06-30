

 <?php

if(!(empty($_POST))){

 $conn = new mysqli( 'localhost', 'root', '', 'forum' );
  
 if ( $conn->connect_error ) {
    die( 'Connect Error: ' . $conn->connect_errno . ': ' . $conn->connect_error );
  }

$user=$_POST['user'];
$pass=$_POST['pass'];

$query="SELECT * from reglogin where Username= '$user' AND Password= '$pass' ";
$result=mysqli_query($conn,$query);
if($row=mysqli_fetch_array($result) ){

    session_start();
    $_SESSION['forum']='true';

    header("location:index.php?id=". $row[0]);
}
else{
echo '<strong>Invalid username or password</strong>';
}


}
?>  

<html>
<head>
<link type="text/css" rel="stylesheet" href="stylesheet.css">
</head>

<body>

</body>

<div id="header">

<h3>Login to the Bulletin Board</h3>

</div>


<div class="content">
<aside>
<h2> Login</h2>
<form  method="POST"  >
<p>Username :<input type="text" name="user"></p>
<p>Password :<input type="password" name="pass"></p>

<input type="submit" name="submit_form" value="Login">

</form>
<p id="p1">Don't have an account then make one.Click on register</p>
<a href="register.php"><input type="button" name="b1" value="Register"></a>
</div>
</aside>
<div id="footer">


&copy Created by Sai Suprabhath.
</div>

</body>
</html>
