<?php
$username="root";
$hostname="localhost";
$password="";
$dbname="edukid";
$tname="contact";

$server=mysqli_connect($hostname,$username,$password,$dbname);
// if($server){
//     echo "fvygghbh";
// }

// $quiry = "CREATE TABLE $tname(userid INT(3) NOT NULL AUTO_INCREMENT PRIMARY KEY,username VARCHAR(64) NOT NULL ,useremail VARCHAR(200) NOT NULL,message VARCHAR(1000))";

if($_SERVER["REQUEST_METHOD"]=="POST"){


    $useremail = $_POST["useremail"];
    $username = $_POST["username"];
    $message = $_POST["message"];

    if($username==""|$message==""|$useremail==""){
        echo "please enter something";
    }
    else {
        $quiry="INSERT INTO $tname VALUES('','$username','$useremail','$message')";


        if (mysqli_query($server,$quiry)) {
            echo "inserted";
        
            # code...
        }
        else {
            echo "failed";
        
        }
        
    }


}

// if(mysqli_query($server,$quiry)) {
//     echo "inserted";

//     # code...
// }
// else {
//     echo "failed";

// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="contact_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div class="container">
    <div id="spcupage">

        <div id="sinfo">
            <h2>CONTACT INFORMATION</h2>
            <P>ASK US ANY QUESTION FOR YOUR CHILDREN</P>
            <div id="icons">
                <i class="fa-solid fa-mobile-retro"> 90xxxxxxxx</i>
                <i class="fa-solid fa-envelope"> shreerampublic@gmail.com</i>
                <a href="#"><i class="fa-solid fa-location-dot"> churu road , pulasar , sardarshahar</i></a>

            </div>
            <div id="bottomicn">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-google"></i>
            </div>
        </div>


        <div id="scmessage">
            <form action="contect.php" method="post">
                <div class="continpt">
                    <input type="text" required id="username" name="username" placeholder="Enter your Name">
                    <input type="email" required id="useremail" name="useremail"placeholder="Enter Your Email">
                </div>
            
                <p>message</p>
                <textarea style="display: block;" id="message" name="message" type="text" placeholder="Type any question" cols="50" rows="10" value=""></textarea>
                <button type="submit"> send message</button>

            </form>
        </div>
    </div>
    </div>

</body>

</html>