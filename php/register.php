<?php
if(isset($_POST['submit'])){
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

registerUser($username, $email, $password);

}

function registerUser($username, $email, $password){
    // first create an array to handle the saved data
    $registrationData = array(
        'fullname' => $username,
        'email' => $email,
        'password' => $password
    );

    // then check if user already exist
    if(checkUserExist($email)){
        echo "User Already exist";

    }
    else{
        // enter the data into the file
        $file = fopen('../storage/users.csv', 'a');
        fputcsv($file, $registrationData);
        fclose($file);
        echo "User registered succesfully";
    }
}

    function checkUserExist ($email){
 $file = fopen('../storage/users.csv', 'r');
 while(!feof($file)){
    $line = fgetcsv($file);
    if($line[1] == $email) {
        return true;
    }
 }
 return false;
    }
    //save data into the file
    
    // echo "OKAY";

echo "HANDLE THIS PAGE";


