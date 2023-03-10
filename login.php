<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login - -></title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="login_page">
        <div id="login_img">
            <img src="images/login-char.svg" alt="login">
        </div>
        <div id="login">
            <form action="index.php" method="post">
            <p>SHREE RAM PUBLIC</p>
            <div><input type="text" required name="username" id="userename" placeholder="Username"></div>
            <div><input type="text" required name="useremail" id="useremail" placeholder="Email"></div>
            <div><input type="password" required name="userpass" id="userpass" placeholder="Password"></div>
            <div>
                <button>Continue with google</button>
                <button type="submit">Log in</button>

            </div>
            <!-- <div id="sign_in">
                <a href="">sign in.</a>
            </div> -->
            </form>
        </div>
    </div>
</body>

</html>