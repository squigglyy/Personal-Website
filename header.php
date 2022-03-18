<?php echo '


<div class="nav">
        <a class="logo" href="index.php"><img src="img/project-nebulr.png" alt=""><img src="img/project-nebulr-orange.png" alt=""></a>
        <a class="option" style="margin-left: 60px;"href="about.php">About</a>
        <a class="option" href="blog.php">Blog</a>
        <a class="option" href="projects.php">Projects</a>

    <!--   <a class="login"         
              <span href="login.php">Login</span>           
        </a>-->

    </div>
    
    
<style>

* { 
    padding: 0;
    margin: 0;
}
body {
    font-family: Outfit, sans-serif;
    background-color:  #003366;
    background-image: radial-gradient(#0050a3 0.09%, transparent 5%),
    radial-gradient(#0050a3 0.09%, transparent 5%);
    background-size: 40px 40px;
    background-position: 0 0, 20px 20px;
    
    
    
}
.nav {
    width: 60%;
    margin: 0 auto;
    color: #fff;
    font-size: 15px;
    padding: 50px 0;
    z-index: 10;
    height: 70px;
    
    
}

.logo {
    margin-top: -15px;
    color: inherit;
    float: left;
    height: 51px;
    text-decoration: none;
}
.logo img {
    
    width: 40px;
    height: 40px;
}

.logo img:last-child {
    display: none;  
}
.logo:hover img:last-child {
    display: block;  
}
.logo:hover img:first-child {
    display: none;  
}

.option {
    color: inherit;
    float: left;
    padding-top: 10px;
    margin-right: 50px;
    text-decoration: none;
    
}
.login {
    color: inherit;
    float: right;
    padding-top: 10px;
    margin-left: 20px;
    margin-right: 20px;
    text-decoration: none;
    
}   

a {
    display: block;
    padding: 15px;
    font-weight: 800;
    text-transform: uppercase;
    margin: 0 10px;
}

a:hover {
    color: #FD7702;
}



</style>

'
?>