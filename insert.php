<?php
$username="root";
$hostname="localhost";
$password="";
$dbname="edukid";
$tname="users";

$server= mysqli_connect($hostname,$username,$password,$dbname);


// $quiry="CREATE DATABASE $dbname";
// $quiry="CREATE TABLE $tname (userid INT(3) NOT NULL AUTO_INCREMENT PRIMARY KEY,useremail VARCHAR(200) NOT NULL,userpass VARCHAR(12) NOT NULL);";


if($_SERVER["REQUEST_METHOD"]=="POST"){


    $useremail = $_POST["useremail"];
    $userpass = $_POST["userpass"];

    if($useremail==""|$userpass==""){
        echo "please enter something";
    }
    else {
        $quiry="INSERT INTO $tname VALUES('','$useremail','$userpass')";


        if (mysqli_query($server,$quiry)) {
            echo "inserted";
        
            # code...
        }
        else {
            echo "failed";
        
        }
        
    }


}




?>