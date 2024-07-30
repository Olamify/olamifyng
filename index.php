<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Login Page | Olamify</title>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-in">
            <form method="post" action="<?php echo htmlspecialchars('serverreg.php');?>" >

                <h1>Create Account</h1>

                <div class="social-icons">
                    <a href="#" class="icon"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fab fa-github"></i></a>
                    <a href="#" class="icon"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registration</span>
                <input type="text" name="name"  id="name" required placeholder="Name" >
                <input type="email" name="email" id="email" required placeholder="Email">
                <input type="password" name="psw" id="psw" required placeholder="Password">
                <button>Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-up">
            <form method="post" action="<?php echo htmlspecialchars('serverlogin');?>">

                <h1>Sign In</h1>

                <div class="social-icons">
                    <a href="#" class="icon"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fab fa-github"></i></a>
                    <a href="#" class="icon"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your email password</span>
                <input type="email"  name="emaill"  id="emaill" placeholder="Email">
                <input type="password"  name="pswl"  id="pswl" placeholder="Password">
                <a href="#">Forgot Password?</a>
                <button>Sign in</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>Register your personal details to use all of our site features</p>
                    <button class="hidden" id="login">Sign Up</button>
                </div>

                <div class="toggle-panel toggle-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details to use all of our site features</p>
                    <button class="hidden" id="register">Sign In</button>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>