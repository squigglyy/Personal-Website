<?php echo '



<nav class="nav" id="nav">
   
    <div class="bar-group" onclick="responsive()"><div class="bar"></div><div class="bar"></div><div class="bar"></div></div>

    <a  class="logo" href="index.php"><img src="img/project-nebulr.png" alt=""><img src="img/project-nebulr-orange.png" alt=""></a>

    <a class="option left" href="about.php">About</a>

    <a class="option" href="blog.php">Blog</a>
    
    <a class="option" href="projects.php">Projects</a>
    
    <a class="icon" href="login.php"><img src="img/outline_account_circle_white_24dp.png" alt=""><img src="img/outline_account_circle_white_24dp-orange.png" alt=""></a>

    
<nav>
    


<script>
function responsive() {
    let nav = document.getElementById("nav");

    if (nav.className === "nav") {
        nav.className += " responsive"
    }else {
        nav.className = "nav";
    }
}
</script>

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


.bar {
    
    width: 30px;
    height: 5px;
    background-color: white;
    border-radius: 5%;
    margin: 5px;
}

.bar-group .bar:hover {
    background-color: #FF8E00;
    
}

.bar-group {
    
    display: none;
    margin-top: 15px;
    margin-left: 15px;
    
}
/*  Responsive Screen  */

@media screen and (max-width: 600px)
{
    
      
    .nav a {
        display: none;
        
    }

    .nav a:first-child {
        padding-bottom: 0;
    }
    

    .bar-group {
        width: 32px;
        padding-top: 0px;    
        display: block;
        cursor: pointer;
        margin-bottom: 20px;    
        
        
    }

    .nav {
    background-color: #003366;
    border-bottom: 3px white solid;
    margin: 0;
    height: 50px;
    }

    .nav .logo {
        margin-bottom: 10px;
    }

   
    .left {
    margin-left: 0px;
    }


    .nav.responsive {
        z-index: 100;
        position: relative;
        
        height: 315px;
        
    }

    .nav.responsive a:nth-child(5) {
        display: none;
      }
      
      
     
    
    .nav.responsive a {
        padding-left: 15px;
        
        float: none;
        display: block;
        text-align: left;
        height: 50px;
    }

    .nav.responsive .bar-group .bar:nth-child(1) {

        cursor: pointer;
        width: 25px;
        height: 25px;
        border: 8.5px solid #003366;
        border-radius: 0;
        background:
        linear-gradient(45deg, rgba(0,0,0,0) 0%,rgba(0,0,0,0) 43%,#fff 45%,#fff 55%,rgba(0,0,0,0) 57%,rgba(0,0,0,0) 100%),
        linear-gradient(135deg, #003366 0%,#003366 43%,#fff 45%,#fff 55%,#003366 57%,#003366 100%);

    
    }

    .nav.responsive .bar-group .bar:nth-child(1) {
        margin-left: -3px;
        margin-top: -5px;
    }

    


    .nav.responsive .bar-group .bar:nth-child(1):hover {
       
        background:
        linear-gradient(45deg, rgba(0,0,0,0) 0%,rgba(0,0,0,0) 43%,#FF8E00 45%,#FF8E00 55%,rgba(0,0,0,0) 57%,rgba(0,0,0,0) 100%),
        linear-gradient(135deg, #003366 0%,#003366 43%,#FF8E00 45%,#FF8E00 55%,#003366 57%,#003366 100%);
    }

    .nav.responsive .bar-group .bar:nth-child(2) {
        display:none;
    }

    .nav.responsive .bar-group .bar:nth-child(3) {
        display:none;
    }

/*  Footer  */

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