<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olamify - Homepage</title>
    <style>abbr{text-decoration: wavy; background-color:lightblue; border-radius: 15px;padding: 2px;} #demo{color:yellow}</style>
    <link rel="stylesheet" href="style.css">
       <?php 
            session_start();
            if (isset($_GET["logout"])) {
                session_destroy();
                header("location: ../");
            }

            if (!isset($_GET["del"])) {
               $sso_key = mt_rand(111111,999999);
               settype($sso_key, "string");
               $sso_file = $sso_key . ".json";           
               $myfile = fopen("$sso_file", "w") or die("Unable to open file!");
               $txt = '{ "name": "'.$_SESSION["uname"].'", "email": "'.$_SESSION["email"].'", "psw": "'.$_SESSION["pswmd5"].'" };';
               fwrite($myfile, $txt);
               fclose($myfile);
            
            }
                        if (isset($_GET["del"])) {
                            if (!unlink($_GET["del"])) {
                                echo ("Error deleting ".$_GET['del']."");
                              } else {
                                echo ("Deleted ".$_GET['del']."");
                                header("location: index.php");
                              }
                        }
                    
       ?>
       <link rel="stylesheet" href="../fontawesome-free-5.15.4-web/css/all.min.css">
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
                    <h2>Hey! 👋,<br><?php echo  $_SESSION["uname"];
?>, here's your code !!! Do not Reload the page</h2>
                    <h1 id="demo"></h1>
                    <button onclick="location.assign('sso.php?del=<?php if(!isset($_GET["del"])){echo $sso_key . ".json";}?>')"><b><i class="fa fa-times"></i></b> Cancel SSO</button>
               </div>
            <div class="image-wrapper">
                <img src="olamify.jpeg" style="border-radius: 100%;">
            </div>
            </div>
        </div>
    </div>
    <script>

document.getElementById("demo").innerHTML = "<?php if(!isset($_GET["del"])){echo $sso_key;}?>";


</script>
</body>
</html>