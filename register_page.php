<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="https://moodle.astanait.edu.kz/theme/image.php/boost/theme/1617388134/favicon" />
    <style type="text/css">
    	*{
            /* border: 1px solid black; */
        }
        input{
            padding: 5px; 
            margin-top: 18px;
            /*margin: 8px;*/
            width: 100%;
        }
        h3{
            text-align: center;
            margin: 50px;
        }
        .width{
            width: 35bpx;
        }
        .font{
            font-family: arial;
            font-weight: bold;
        }
        body{
        	background-image: url(photos/about_us_bg.jpeg);
            background-size: 100%;
            height: 800px;	
        }
        button a{
            text-decoration: none;
            text-align: center;
            font-family: Times New Roman;
            font-size: 30px;
            text-align: center;
            color: black;
        }
        button{
            border: none;
            background-color: white;
        }
        button:hover{
            box-shadow: 0 0 11px rgba(33,33,33,.2); 
            border:0.01px solid black;
        }
    </style>
</head>
<body>
    <div class="container-fluid all">
        <div class="pt-3"></div>
    <div class="row p-1 bg-light">
        <div class="col-1 pt-1 center"><img src="photos/logo.png" style="height: 70px; width: 110px;"></div>
        <nav class="col-8 row" style="margin-right: 5px;">
        <div class="col-1"></div>
        <button class="" style="width: 157px"><a href="">Car brands</a></button>
        <button class="col-2"><a href="#about_us">About Us</a></button>
        <button class="col-2"><a href="">Service</a></button>
        <button class="col-3"><a href="#carousel">Special offers</a></button>
        <button class="col-2"><a href="#map">Contacts</a></button>
        </nav>
        <div class="col-1"></div>
        <div class="col-1 pt-1"><a href=""><img class="center" src="photos/gps.png
            " style="height: 50px; width:50px;"></a></div>
        <div class="col-1 pt-1"><a href="login.php"><img class="center" src="photos/login.png" style="height: 65px; width:65px; "></a></div>    
    </div>



	<div class="container w-25 rounded mt-5 p-3 bg-dark">
                <form action="add_client.php" id="btn_add" method="post">
                <h3 class="font pt-3 text-light">Sign up</h3>
                    <input type="text" name="name" placeholder="First Name" class="border-0 bg-light rounded"><br>
                    
                    <input type="text" name="surname" placeholder="Surname" class="border-0 bg-light rounded"><br>

                    <input type="text" name="phone_number" placeholder="Phone Number" class="border-0 bg-light rounded"><br>

                    <input type="email" name="email" placeholder="Email" class="border-0 bg-light rounded"><br>

                    <input type="password" name="password" placeholder="Password" class="border-0 bg-light rounded"><br>

                    
                    <input type="submit" name="submit" value="Submit" class="form-control my-4 border-0 pink text-light  rounded center" style="text-align: center; background-color: green;">

                </form>
                <p class="text-secondary text-center mt-5">Already a member? <a href="login.php" class="text-secondary" style="">Sign in now</a></p>
            </div>

        </div>
</body>
</html>