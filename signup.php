<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOTEL TRANSYLVANIA</title>
    <link href="img/logo.png" rel="shortcut icon">
    <link href="css/ui.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
    <div class="white-bar">
        <div class="nav-bar">
            <ul>
                <a href="index.php"><li class="pad8" style="float:right;margin-top: 5px;font-size: 30px;"> <i class="fa fa-times"></i></li></a> 
            </ul>
        </div>
    </div>

    <center>
        <div class="login-body">
            <div class="bodyRightHeader">
                <h3>Create an account</3>
            </div>
            <form action="assets/auth.php?register" method="POST" class="formAuth">
                <label class="label black">Names</label>
                <input type="text" name="name" placeholder="Jon Snow" class="form-search" style="margin-top:16px;" required/>
                <label class="label black">Phone Number</label>
                <input type="number" name="tel" placeholder="07** *** ***" class="form-search" style="margin-top:16px;" required/>
                <label class="label black">Nationality</label>
                <input type="text" name="nationality" placeholder="Rwandese" class="form-search" style="margin-top:16px;" required/>
                <label class="label black">Email</label>
                <input type="email" name="email" placeholder="example@domain.com" class="form-search" style="margin-top:16px;" required/>
                <label class="label black">Password</label>
                <input type="password" name="password" placeholder="********" class="form-search" style="margin-top:16px;" required/>
                <p class="width100" style="padding-top:530px">Already have an account? <a href="login.php">Login</a></p>
                <button type="submit" class="button width100 white" style="margin-top:20px"> Register</button>
            </form>
        </div>
    </center>
</body>
</html>