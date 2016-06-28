<?php

session_start();
function login(){
if(isset($_SESSION['forum']) && !empty($_SESSION['forum']))
{
   return true;
}
else{
return false;
}
}

?>