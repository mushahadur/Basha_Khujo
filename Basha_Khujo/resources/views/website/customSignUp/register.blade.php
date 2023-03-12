
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="{{asset('/')}}website/admin-auth-assets/css/styles.css">
    <title>SignUp</title>
    <style>
        .Section{
            background-image: url("{{asset('/')}}website/admin-auth-assets/img/3.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            height: 100vh;
        }
        .pt{
            padding-top: 12px;
        }
        .back{
            text-align: center;
            padding-top: 19px;
        }
    </style>
</head>
<body>
<div class="Section">

    <div class="wrapper">

        <div class="title">
            SignUp Here
        </div>
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
        <div class="form pt">
            <div class="input_field">
                <input type="text" placeholder="Name" class="input" id="name" onkeyup="validateName()">
                <i class="fas fa-user"></i>
                <samp id="name-error"></samp>
            </div>
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
            <div class="input_field">
                <input type="password" placeholder="Confm Password" class="input" id="conPassword" onkeyup="validateConPass()">
                <i class="fas fa-lock"></i>
                <samp  id="conPass-error"></samp>
            </div>
            <div class="btn">
                <a href="#" onclick="return validation()">SignUp</a>
            </div>
            <div class="back"><a  href="{{route('home')}}">Go To Home</a></div>

        </div>
    </div>
</div>

<script src="{{asset('/')}}website/admin-auth-assets/js/scripts.js"></script>
</body>


</html>
