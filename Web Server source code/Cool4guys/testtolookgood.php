<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            
            
            
            
            
            
            
              .wth > a {
                float: left;
                text-align: center;
                padding: 14px 16px;
                font-size: 17px;
                position: relative;
                color: #000;
                text-decoration: none;
              }

              .wth > a:hover {
                color: #000;
              }
              
              .wth > a::before {
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

              .wth > a:hover::before {
                visibility: visible;
                transform: scaleX(1);
              }


        </style>
    </head>
    <body>
        <div class="wth">
        <a href="index.php">Home</a> 
	<a href="about.php">About Us</a>
	<a href="contact.php">Contact</a>
        </div>
        <h2>Hi  <a href="index.php">Heyy</a> </h2>
    </body>
</html>
