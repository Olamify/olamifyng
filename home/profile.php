<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olamify - Homepage</title>
    <style>
        button {
            background-image: linear-gradient(to right, #e9ff99 0%, #80d7ff 51%, #ff81ee 75%);
            color: #100029 !important;
            font-weight: 700;
        }
    </style>
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
                <div class="logo"><a href="index.php">Olamify</a></div>
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
                    <h2>Hey! 👋,<br>
                        <?php echo  $_SESSION["uname"];?>
                    </h2>


                    <fieldset>
                        <form method="post" action="<?php echo htmlspecialchars('changedata.php');?>">
                            <legend>
                                <h3 style="color:yellow;">Login Info</h3>
                            </legend>
                            <label>Name</label><br>
                            <input type="text" name="pname" placeholder="Your Name">
                            <hr>
                            <label>Password</label><br>
                            <input type="password" name="ppsw" placeholder="Your Password">
                            <button>Save</button>
                        </form>
                    </fieldset>

                </div>
                <div class="image-wrapper">
                    <img src="gif1.gif" width="300" height="300" style="border-radius: 100%;">
                </div>
            </div>
        </div>
    </div>

</body>

</html>