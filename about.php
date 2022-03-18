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
    <title>Project Nebulr</title>
</head>
<body>
    
    <?php include('header.php');?>

    <div class="about-container">
    <img class="avatar"src="img/avatar.png" alt="Avatar">
    <div class="about">
    
    
    <h1>About Me</h1>
    <p>
        My name is Matthew. 
        I have a passion for technology and programming, 
        I love learning, and I am a student. 
        Right now, I am focusing on creating fun projects and school work. 
        I hope to make the world a better and more enjoyable place.
    </p>
  
    
    <footer class="footer">
    <section class="container">
      
      
        © 2022 Matthew Monger · Powered by electrical energy.
      
      
    </section>
  </footer>


</body>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Outfit&display=swap');

    .about-container {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 600px;
    }

    .avatar {
        display: block;
        width: 350px;
        height: 350px;
        border-radius: 50%;
        margin-left: auto;
        margin-right: auto;

    }

    .about {
        color: white;
        padding-top: 10px;
        width: 600px;
        
        margin-left: auto;
        margin-right: auto;
        text-align: center;
    }

    .about h1 {
        padding-top: 10px;
        font-size: 30px;
    }

    .about p {
        padding-top: 20px;
        font-size: 20px;
    }

    .about ul {
        list-style: none;
        padding-top: 10px;
    }




    .footer {
    position: fixed;
    width: 100%;
    text-align: center;
    line-height: 2rem;
    margin-bottom: 1rem;
    left: 0;
    bottom: 0;
    }
</style>
</html>