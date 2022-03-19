<?php echo '


<nav class="nav">
   
    <a  class="logo" href="index.php"><img src="img/project-nebulr.png" alt=""><img src="img/project-nebulr-orange.png" alt=""></a>

    <a class="option left" href="about.php">About</a>

    <a class="option" href="blog.php">Blog</a>
    
    <a class="option" href="projects.php">Projects</a>
    
    <a class="icon" href="login.php"><img src="img/outline_account_circle_white_24dp.png" alt=""><img src="img/outline_account_circle_white_24dp-orange.png" alt=""></a>
<nav>



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
    letter-spacing: 1px;

}


/*  Navigation Bar  */ 
.nav {  
    color: #fff;
    font-size: 18px;
    margin:0;
    padding:0;
    text-align:center;
    font-weight: 800;
    height: 80px;
    margin-top: 20px;

    
}

.nav a {
    text-transform: uppercase;
    display:inline-block;
    height: 80px;        
    
}


.left {
    margin-left: 70px;
}


/*  Navigation Bar - Logo  */ 


.logo {
    display: inline-block;
    vertical-align: top;
    margin-right: 20px;
    margin-top: 0px;
    width: 40px;
    height: 40px;
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

/*  Navigation Bar - icon  */ 

.icon {
    
    display: inline-block;
    vertical-align: top;
    margin-right: 20px;
    margin-top: 2px;
    width: 35px;
    height: 35px;
}

.icon img {
    
    width: 35px;
    height: 35px;
}



.icon img:last-child {
    display: none;  
}
.icon:hover img:last-child {
    display: block; 
    
}
.icon:hover img:first-child {
    display: none;  
}



/*  Navigation Bar - Options  */ 

.option {
    color: inherit;
    padding:10px;
    margin-right: 70px;
    text-decoration: none;
    
    
}

.nav .option:last-child {
    margin-right: 0px;
    
    
    
}


.option:hover {
    color: #FF8E00;
}


.footer {
    color: white;
    position: fixed;
    width: 100%;
    text-align: center;
    line-height: 3rem;
    margin-bottom: 1rem;
    left: 0;
    bottom: 0;
    letter-spacing: 2px;
}

</style>

'
?>