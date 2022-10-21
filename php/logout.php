<?php
session_start();
function logout(){
    
    // check if there is a session and destroy it then redirect the user to the index.php page
       if($_SESSION){
        session_destroy();
        header("Location: ../index.php");
        exit();
       } 
   else{
header("Location: ../index.php? error you are not logged in");
exit();
   }
}

echo "HANDLE THIS PAGE";
logout();
