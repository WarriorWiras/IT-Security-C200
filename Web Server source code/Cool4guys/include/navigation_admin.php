<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            .img-responsive {
                height: auto;
                width: auto;
                max-height: 72px;
                max-width: 250px;
            }
            
             
            .topnav {
                overflow: hidden;
            }
            
            .topnav > a {
              float: left;
              text-align: center;
              padding: 14px 16px;
              font-size: 17px;
              position: relative;
              color: #000;
              text-decoration: none;
            }
              
            .topnav > a:hover {
                color: #000;
              }
              
            .topnav > a::before {
                content: "";
                position: absolute;
                width: 100%;
                height: 2px;
                bottom: 0;
                left: 0;
                background-color: #000;
                visibility: hidden;
                transform: scaleX(0);
                transition: all 0.3s ease-in-out 0s;
              }

            .topnav > a:hover::before {
                visibility: visible;
                transform: scaleX(1);
            }
            
            .topnav-right {
            float: left;
            
            }
            
            .topnav a.active {
            color: grey;
            }
            
            .footer{
                text-align: center;
            }
            
            .maincontent{
                padding: 20px 50px 20px 50px;
            }
        </style>
    </head>
    <body>
        <div class="topnav">
        <a <?php if ($activePage =="index") {?>
        class="active" <?php } ?> href="index.php"><img src="pictures/4guys.png" class="img-responsive"/></a> 
	<a <?php if ($activePage =="about") {?>
        class="active" <?php } ?> href="about.php">About Us</a>
	<a <?php if ($activePage =="contact") {?>
        class="active" <?php } ?> href="contact.php">Contact</a>
        <a <?php if ($activePage =="DisplayFile") {?>
        class="active" <?php } ?> href="CommandInjection.php" class="topnav-right">Display file</a>
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
