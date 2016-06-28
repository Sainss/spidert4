<html>
<head>

<script type="text/javascript">

    function validate()
    {
       
	var error="";
	var name = document.getElementById( "name_of_user" );
	if( name.value == ""||!(name.value.match(/^[a-zA-Z ]+$/)) )
	{
	error = " You Have To Write a valid Name. ";
	document.getElementById( "error_para" ).innerHTML = error;
	return false;
	}

       

	var email = document.getElementById( "email_of_user" );
	if( email.value == "" || email.value.indexOf( "@" ) == -1 )
	{
	error = " You Have To Write Valid Email Address. ";
	document.getElementById( "error_para" ).innerHTML = error;
	return false;
	}

	var phone=document.getElementById( "phone_of_user" );
        if(phone.value=="")
        {
         error = " You Have To enter your phone number. ";
	document.getElementById( "error_para" ).innerHTML = error;
	return false;
	}

	else
	{
	return true;
	}

    }
</script>
<style>
body{
background:url(back.jpg);
}  

#header{


margin: 10px;
height: 100px;
border-radius:5px;
}

h1{
text-align:center;
}

h3{
font-size:250%;
margin:0;
text-align:center;
color:#e5e4d7;
font-family:Georgia,Arial;
position:relative;
top:50%;
-webkit-transform: translateY(-50%);
-ms-transform: translateY(-50%);
transform: translateY(-50%);
}

div#form{
height:500px;
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
           <div id="header">

<h3>Registration</h3>

</div>

       <div id="form">
         
       
	<h1>Register for the bulletin board</h1>	
	 <form method="POST" action="insertdata.php" onsubmit="return validate();">
	 	<p>Name*:<input type="text" name="Name" id="name_of_user"></p>
                 
	 	<p>Email Address*:<input type="text" name="email" id="email_of_user"></p>

		<p>Phone number*:<input type="text" name="phone" id="phone_of_user"></p>
 
                <p>Username*:<input type="text" name="user" minlength="6" id="user"></p>

                <p>Password*:<input type="password" name="pass" minlength="6" id="pass"></p>

                <p>Re-enter Password*:<input type="password" name="repass" minlength="6" id="repass"></p>
          <br>
          <input type="submit" name="submit_form" value="Submit">

        

	 </form>
           
	 <p id="error_para" ></p>
          </div>
        
    </body>
</html>