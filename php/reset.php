<?php
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $newpassword =  $_POST['password'];

    resetPassword($email, $newpassword);
}

function resetPassword($email, $password){
    $file = fopen('../storage/users.csv', 'r');
    while(!feof($file)){
       $line = fgetcsv($file);
       if($line[1] == $email) {
          $line[2] = $password;
          fclose($file);
          $file = fopen('../storage/users.csv', 'w');
          fputcsv($file, $line);
          fclose($file);

          echo "Password Reset Succesful ";
          exit();


       }
    }
    return false;

    //open file and check if the username exist inside
    //if it does, replace the password
}



