<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olamify - Homepage</title>
    <style>abbr{text-decoration: wavy; background-color:rgb(0, 0, 66); border-radius: 15px;padding: 5px; font-weight: bold; color: #ffefd6;}</style>
    <link rel="stylesheet" href="style.css">
       <?php 
            session_start();
            if (isset($_GET["logout"])) {
                session_destroy();
                header("location: ../");
            }
       ?>
       
    <?php include('../serverlogin.php') ?>
</head>
<body>
    
    <div class="container">
        <div class="glass-container">
            <nav class="navbar">
                <div class="logo"><a href="#">Olamify</a></div>
                <ul class="nav-links">
                    <li class="nav-link"><a href="index.php">Home</a></li>
                    <li class="nav-link"><a href="apps.php">Apps</a></li>
                    <li class="nav-link"><a href="games.php">Games</a></li>
                    <li class="nav-link"><a href="profile.php">Profile</a></li>
                    <li class="nav-link"><a href="#">Youtube</a></li>
                    <li class="nav-link"><a href="index.php?logout">Logout</a></li>
                </ul>
            </nav>
            <div class="content">
                <div class="main">
                    <h2>Hey! 👋,<br><?php echo  $_SESSION["uname"];
?></h2>
                    <p>Login to the Olamify App from your phone by connecting to the web app. A code will be given to you from here, So you have to type it on the mobile device to connect <abbr title="Single Sign On">SSO</abbr> for Olamify. Or you can directly register from the Android App.</p>
                    <button onclick="location.assign('sso.php')">Get Started with SSO</button>
                </div>
            <div class="image-wrapper">
                <img src="olamify.jpeg" style="border-radius: 100%;">
            </div>
            </div>
        </div>
    </div>

</body>
</html>