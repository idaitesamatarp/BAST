<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><html>
<head>
    <meta charset="utf-8">
    <title>Dashboard Login</title>
    <link href="<?php echo base_url().'assets/css/style.css'?>" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" rel="stylesheet">

</head>
<html>    
<body>
    <div class="boxs">
    </div>

    <div class="box">
        <h2>Login BAST</h2> 
        <?php if(isset($error)) { echo $error; }; ?> <br> <br>
        <form class="user" action="<?php echo base_url().'login/'?>" method="post"> 
            <div class="inputBox">

                <input type="text" name="username" required="">
                <label>Username</label>
                
            </div>
            <div class="inputBox">

                <input type="password" name="password" required="">
                <label>Password</label>
                
            </div>
            <input type="submit" name="btn-login" value="Login">
            <a href="<?php echo base_url()?>welcome" class="btn btn-danger btn-user btn-block"> Go Back Home </a>
            
        </form>
    </div>
</body>
</html>


