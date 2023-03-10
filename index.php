<?php
$username = "root";
$hostname = "localhost";
$password = "";
$dbname = "edukid";
$tname = "users";

$server = mysqli_connect($hostname, $username, $password, $dbname);


// $quiry="CREATE DATABASE $dbname";
// $quiry="CREATE TABLE $tname (userid INT(3) NOT NULL AUTO_INCREMENT PRIMARY KEY,useremail VARCHAR(200) NOT NULL,userpass VARCHAR(12) NOT NULL);";

// echo '<script>alert("hello world")</script>';

$loginhtml = '<li><a href="login.php">Log in</a></li>';

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $useremail = $_POST["useremail"];
    $userpass = $_POST["userpass"];

    $sel = "SELECT userid FROM $tname";
    // $sql = "SELECT * FROM student where studentid = $studentid;";
    $result = mysqli_query($server, $sel);
    // $row = mysqli_fetch_assoc($result);

    $dbidArr = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $dbidArr[] = $row["userid"];
    }
    // print_r($dbemailArr);
    $check = 0;
    $checkedpass;
    foreach ($dbidArr as $item) {
        $passcheck = "SELECT * FROM $tname WHERE userid=$item";
        $reult = mysqli_query($server, $passcheck);
        $rw = mysqli_fetch_assoc($reult);
        if ($useremail == $rw["useremail"]) {
            $check = 1;
            $checkedpass = $rw["userpass"];
        }
    }



    if ($check) {
        // $passcheck = "SELECT * FROM $tname WHERE useremail=$useremail";
        // $reult = mysqli_query($server, $passcheck);
        // $rw = mysqli_fetch_assoc($reult);
        // if ($userpass == $rw["userpass"]) {
        if ($userpass == $checkedpass) {
            $loginhtml = '<li><i class="fa-solid fa-user"></i> ' . $useremail . '</li>';
        } else {
            echo '<script>alert("Enter valid password")</script>';
        }
    } else {
        echo '<script>alert("Do you want to create a new account")</script>';


        if ($useremail == "" | $userpass == "") {
            // echo "please enter something";
        } else {
            $quiry = "INSERT INTO $tname VALUES('','$useremail','$userpass')";


            if (mysqli_query($server, $quiry)) {
                // echo "inserted";

            } else {
                // echo "failed";

            }
        }
    }
}







?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>school.com - - >>></title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <!-- This is header -->
    <header>
        <div class="logo">
            <img height="26rem" src="images/logo.png" alt="logo">
        </div>

        <div class="navbar">
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html"> About</a></li>
            <li><a href="contect.html"> Contact</a></li>
            <?php echo $loginhtml; ?>
        </div>
    </header>
    <!-- home page design -->
    <div class="home_image">
        <div class="headings">
            <h1>SHREE RAM PUBLIC</h1>
            <p>BEST EDUCATION FOR YOUR CHILDREN</p>
            <button>READ MORE</button>
        </div>
    </div>
    <!--facility page-->
    <div class="facility">
        <h2>Facilities</h2>
    </div>
    <div class="facilities">

        <div class="box"><img src="images/library.jpg" alt="">
            <div class="text">

                <h4>Library</h4>
                Welcome to our school library! Our library is a vibrant and welcoming space where students, teachers, and community members can come to explore, learn, and connect with a wide range of resources.
            </div>
        </div>
        <div class="box"><img src="images/computer_lab.jpg" alt="">
            <div class="text">

                <h4>Computer lab</h4>
                Welcome to our school's computer lab! Our computer lab is a state-of-the-art facility that provides students with access to the latest technology and software. Our lab is equipped with high-speed internet, the latest computers, and a variety of educational software programs.
            </div>
        </div>
        <div class="box"><img src="images/science_lab.jpg" alt="">
            <div class="text">

                <h4>Science lab</h4>
                Our science lab is a dynamic learning environment designed to help students explore the wonders of science through hands-on experimentation and inquiry-based learning.
            </div>
        </div>
        <div class="box"><img src="images/online_learning.jpg" alt="">
            <div class="text">

                <h4>Online learning</h4>
                Welcome to our school's online learning platform! Our online learning platform is a comprehensive and flexible tool designed to provide students with a rich and engaging learning experience that can be accessed from anywhere, at any time.
            </div>
        </div>
        <div class="box">
            <img src="images/kids-1093758__480.jpg" alt="">
            <div class="text">

                <h4>Classrooms</h4>
                Our classrooms are warm and welcoming spaces designed to provide students with a comfortable and supportive learning environment.
            </div>
        </div>
        <div class="box"><img src="images/play_garden.jpg" alt="">
            <div class="text">

                <h4>Play garden</h4>
                At our school, we believe that play is an essential part of a child's development and learning journey. Our playground is a space where students can have fun, be active, and learn important life skills in a safe and supportive environment.
            </div>
        </div>
        <div class="box"><img src="images/garden.jpg" alt="">
            <div class="text">

                <h4>Garden</h4>
                The garden is also a space for creative expression and artistic exploration. Students are encouraged to create art and express themselves through their interactions with the garden, whether it's through drawing, painting, or other artistic mediums.
            </div>
        </div>
    </div>
    <!-- form page design -->


    <div class="contect_us">
        <div class="information">
            <div class="first_colon">
                <h3>Contact Us</h3>
                <p>Shree ram public school</p>
                <p>Registered Charity : 12345-67</p>
                <div class="font">
                    <a id="instagram" href="https://www.instagram.com/pankaj._.pandat"><i class="fa-brands fa-instagram"></i></a>
                    <a id="facebook" href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a>
                    <a id="telegram" href="https://web.telegram.org/"><i class="fa-brands fa-telegram"></i></a>
                </div>
            </div>
            <div class="second_colon">
                <p>
                    churu road , pulasar,
                    sardarshahar ,
                    331402
                </p>
                <p>Phone No: 90xxxxxxxx</p>

            </div>

        </div>
        <div class="form_action">
            <div class="inner">
                <div class="inner_p"><label for="name">name :</label>
                    <input type="text" name="name" id="name">
                </div>
                <div class="inner_p"><label for="email">email :</label>
                    <input type="email" id="email" name="email">
                </div>
                <div class="inner_p"><label for="mo">mobile :</label>
                    <input type="tel" name="mo" id="mo">
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="links">
            <a id="instagram" href="https://www.instagram.com/pankaj._.pandat"><i class="fa-brands fa-instagram"></i></a>
            <a id="facebook" href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a>
            <a id="telegram" href="https://www.telegram.com/"><i class="fa-brands fa-telegram"></i></a>
        </div>
        <div class="menu">
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html"> About</a></li>
            <li><a href="contect.html"> Contact</a></li>
            <?php echo $loginhtml; ?>
        </div>
        <div id="powered">
            powered by <a href="http://localhost/school_project/index.php">school.com</a>
        </div>

    </footer>
</body>

</html>