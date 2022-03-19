<?php



?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
<link rel="manifest" href="favicon/site.webmanifest">
<link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
<title>Login - Nebulr</title>
</head>
<body>
<?php include('header.php');?>

<div class="box">
    <form method="post">
        <div class="title" style="font-weight: 600;">Login</div>
        <div style="font-size: 18px;"class="title">Username:</div>
        <input class="text" type="text" name="user_name"><br><br>
        <div style="font-size: 18px;"class="title">Password:</div>
        <input class="text" type="password" name="password"><br><br>
        <input class="button" type="submit" value="login"><br><br>

    </form>
</div>


<footer class="footer">
    <section class="container">
      
      
        © 2022 Matthew Monger 
      
      
    </section>
  </footer>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Outfit&display=swap');

.title {
    font-size: 20px; 
    margin: 10px; 
    color:white;
}
.text{
    height: 30px;
    border-radius: 5px;
    padding: 4px;
    border: solid 5px #FD7702;
    width: 95%;
}

.button {
    margin-top: 10px;
    padding: 10px;
    width: 100px;
    color: white;
    justify-content: center;
    background-color: #FD7702;
    border: none;
}

.box {
    position: absolute; 
    top: 200px;
    left: 50%;
    
    margin-left: -150px;
    
    border: 3px solid #002347;
    background-color:  #003F7D;
    width: 300px;
    height: 300px;
    padding: 20px;
}
</style>
</body>
</html>