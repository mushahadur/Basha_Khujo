
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="{{asset('/')}}website/admin-auth-assets/css/styles.css">
    <title>Login</title>
    <style>
        .Section{
            background-image: url("{{asset('/')}}website/admin-auth-assets/img/1.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            height: 100vh;
        }
    </style>
</head>
<body>
<div class="Section">

    <div class="wrapper">
        <div class="title">
            Login
        </div>

        <div class="form">

            <div class="input_field">
                <input type="text" placeholder="Email" class="input" id="email" onkeyup="validateEmail()">
                <i class="fas fa-envelope"></i>
                <samp id="email-error"></samp>
            </div>
            <div class="input_field">
                <input type="password" placeholder="Password" class="input" id="password" onkeyup="validatePass()" >
                <i class="fas fa-lock"></i>
                <samp id="Pass-error"></samp>
            </div>
            <div class="forget">
                <a href="#">Forgot your password?</a>
            </div>
            <div class="btn">
                <a href="#" onclick="return validation()">Login</a>
            </div>
        </div>

        <div class="or">-- or connect with --</div>

        <div class="social_media">
            <div class="item">
                <i class="fab fa-facebook-f"></i>
            </div>
            <div class="item">
                <i class="fab fa-twitter"></i>
            </div>
            <div class="item">
                <i class="fab fa-google-plus-g"></i>
            </div>
        </div>
        <div class="newAccount"><p>Create a <a href="{{route('signUp')}}"> New Account</a> </p>
        </div>
    </div>
</div>

<script src="{{asset('/')}}website/admin-auth-assets/js/scripts.js"></script>
</body>


</html>
