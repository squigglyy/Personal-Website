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
    <title>Home - Nebulr</title>
</head>
<body>
    
    <?php include('header.php');?>

    
    <div class="about">   
    
        <h1>Matthew Monger</h1>
        <h2>/* no comment */</h2>
            
      <div class="row">
        <a class="socials" href="https://github.com/squigglyy" target="_blank"><img src="img/GitHub-Mark-Light-64px.png" alt=""><img src="img/GitHub-Mark-64px-orange.png" alt=""></a>
        <a class="socials" href="#" target="_blank"><img src="img/project-nebulr.png" alt=""><img src="img/project-nebulr-orange.png" alt=""></a>
        <a class="socials" href="#" target="_blank"><img src="img/twitter.png" alt=""><img src="img/twitter-orange.png" alt=""></a>
      </div>      

    </div>
      
    <footer class="footer">
    <section class="container">
      
        © 2022 Matthew Monger 
      
    </section>
  </footer>


</body>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Outfit&display=swap');

    .about {
        display: block;
        margin-left: auto;
        margin-right: auto;
        margin-top: 150px;
        width: 500px;
        color: white;
        text-align: center;
        
        
    }

    .about h1 {
        padding-top: 10px;
        font-size: 35px;
    }

    .about h2 {
        padding-top: 20px;
        font-size: 30px;
    }

    .socials {
        margin-left: auto;
        margin-right: auto;
        margin-top: 30px;
        
    }

    .row {
     display: flex;

    }
    .socials img { 
        width: 45px;
        height: 45px;
    }
   
    .socials img:last-child {
        display: none;  
    }

    .socials:hover img:last-child {
        display: block; 
    }

    .socials:hover img:first-child {
        display: none;  
    }


    



</style>
</html>