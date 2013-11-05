<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title> Main Window</title>
        <style type="text/css">
            body{
                background-color:aquamarine;
            }
        </style>
        <style>
            .sys_area{
                color: green;
                padding: 8px 8px 8px 8px;
                border: 3px #ff0000 double;
                margin-left: 5%;
                margin-right: 5%;
                font-size: 35px;
                font-weight: bold;
                text-align: center;
                background-color: yellowgreen;
             }
        </style>
        <style type="text/css">
            .fest_area{
                color:green;
                text-align: center;
                border-radius: 20px;
                padding: 2em;
                width: 150px;
                height:200px;
                margin-left:2em;
                border: 3px dotted red;
                font-weight: bold;
                font-size: 20px;
                -moz-box-shadow: 4px 4px 14px #000;
                -webkit-box-shadow: 4px 4px 14px #000;
                box-shadow: 4px 4px 14px #000;
               
             }
        </style> 
        <style type="text/css">
            .nitt{
                color: green;
                text-align: center;
                margin-left:70em;
                border: 3px red dotted;
                font-size:18px;
                border-radius: 20px;
                padding: 2em;
                width: 150px;
                height:200px;
                margin-top: -16em;
                font-weight: bold;
                -moz-box-shadow: 4px 4px 14px #000;
                -webkit-box-shadow: 4px 4px 14px #000;
                box-shadow: 4px 4px 14px #000;
                
            }
        </style>
        <style type="text/css">
            a:link{color: green}
            a:visited{color: red}
            a:hover{color: saddlebrown}
            a:active{color: yellow}
        </style>
      </head>
    <body>
        <table bgcolor="red" border="3" cellspacing="10" width="100%">
            <tr colspan="5">
                <th><img style="border:3px; height:200; width:200" src="nitt_logo.jpg" /></th>
                <th><font color="green" size="20">National Institute of Technology Trichy-620015</font></th>
            </tr>  
        </table>
        <br>
        
        <p class="sys_area">T-SHIRTS AND FOOD COUPONS REGISTRATION SYSTEM</p>
        
        <fieldset class="fest_area">
            <legend>Know Your Fest</legend>
            <a href="version.php" title="Know about Version">Version</a><br><br>
            <a href="festember.php" title="Know about Festember">Festember</a><br><br>
            <a href="pragyan.php" title="Know about Pragyan">Pragyan</a><br><br>
            <a href="nittfest.php" title="Know about NITTFEST">NITTFEST</a>
        </fieldset>
        <fieldset class="nitt">
            <legend>Goto NITT Site</legend>
            <a href="http://www.nitt.edu" title="www.nitt.edu">Click Here</a>
        </fieldset>
        <br><br>
        <div id="menu" align="middle">
            <font size="5px">
            <a href="login.php" title="Register">Register</a> | 
            <a href="unreg.php" title="Unregister">Unregister</a> | 
            <a href="list.php" title="List Registered Students">List</a> |
            <a href="update_login.php" title="Update Registered Information">Update</a> 
            </font>
        </div>
       <marquee direction="left">
        <p style="font-size: 20pt;color:black;text-align: center;font-weight: bold;">
            Last Date For Registration is 30-10-2013
        </p>
        </marquee> 
        
        
        
    






   <?php
            




   ?>
    </body>
</html>