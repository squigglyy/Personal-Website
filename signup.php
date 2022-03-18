<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>
<?php include('header.php');?>    

<div class="box">
    <form method="post">
        <div class="title">Signup</div>
        <div style="font-size: 18px;"class="title">Username:</div>
        <input class="text" type="text" name="user_name"><br><br>
        <div style="font-size: 18px;"class="title">Password:</div>
        <input class="text" type="password" name="password"><br><br>
        <div style="font-size: 18px;"class="title">Re enter password:</div>
        <input class="text" type="password" name="repassword"><br><br>
        <input class="button" type="submit" value="login"><br><br>
        <div class="title"><?php
        if ($invalid == 1)
        {
            echo "Error with username or passwords!";
        
        
        }elseif  ($invalid == 2)
        {
            echo "username is already taken!";
        }
         ?></div>
    </form>
</div>


<style>
.title {
    font-size: 20px; 
    margin: 10px; 
    color:white;
}
.text{
    height: 30px;
    border-radius: 5px;
    padding: 4px;
    border: solid 5px grey;
    width: 100%;
}

.button {
    margin-top: 10px;
    padding: 10px;
    width: 100px;
    color: white;
    justify-content: center;
    background-color: gray;
    border: none;
}

.box {
    position: absolute; 
    top: 50%;
    left: 50%;
    margin-top: -250px;
    margin-left: -150px;
    
    border: 3px solid grey;
    background-color: #1C1C1C;
    width: 300px;
    height: 500px;
    padding: 20px;
}
</style>
</body>
</html>