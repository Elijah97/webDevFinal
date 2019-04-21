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
                <li><a href="index.php"><img src="img/logo.png" alt="" width="50"></a></li>
                <li class="pad8"><a href="index.php" class="active">Home</a></li>
                <li class="pad8"><a href="index.php">About</a></li>
                <li class="pad8"><a href="shop.php">Shop</a></li>
                
                <li class="pad8" style="float:right;margin-bottom: 5px"> 
                    <a href="cart.php" class="cart-big "><i class="fa fa-shopping-cart red" style="font-size: 30px;"></i>&nbsp;<sup>3</sup></a>
                </li>
                <li class="pad8" style="float:right;margin-bottom: 5px">
                    <a href="signup.php"  class="button white">Join Free</a>
                </li>
                <li class="pad8" style="float:right">
                    <a href="login.php">Login</a>
                </li>
                <!-- When user is logged in -->
                <li class="pad8" style="float:right;margin-bottom: 5px"> 
                    <div class="dropdown pushRight">
                        <button onclick="myFunction()" class="dropbtn">{{ Username }}<i class="fa fa-caret-down"></i></button>
                    </div>
                </li>
            </ul>
        </div>
    </div>