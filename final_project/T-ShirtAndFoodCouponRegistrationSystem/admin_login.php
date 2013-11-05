<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Login</title>
        
        <style type="text/css">
            body{
                background-color: aquamarine;
            }
        </style>
        <style>
          input{
              color: black;
              border: 3px darkblue double;
          }
       </style>
        <style type="text/css">
            .login_area{
                color:green;
                text-align:center;
                border-radius: 20px;
                padding: 2em;
                width: 300px;
                height:200px;
                margin-left:35em;
                border: 3px dotted red;
                font-weight: bold;
                -moz-box-shadow: 4px 4px 14px #000;
                -webkit-box-shadow: 4px 4px 14px #000;
                box-shadow: 4px 4px 14px #000;
                
                
             }
        </style> 
   </head>
   <body>
       <table bgcolor="red" border="3" cellspacing="10" width="100%">
            <tr colspan="5">
                <th><img style="border:3px; height:200; width:200" src="nitt_logo.jpg" /></th>
                <th><font color="green" size="20">National Institute of Technology Trichy-620015</font></th>
            </tr>  
        </table>
       <br><br><br><br><br>
       <!-- echo"<script>alert('Rajeev')</script>"  -->
       <form name="login" action="admincheck.php" method="post">  
         <fieldset class="login_area">
            <legend>ADMIN LOGIN</legend>
            <br>
            <table border="0" cellspacing="3" cellpadding="6">
               <tr>
                  <th><font size="4"><label>User name:</label></font></th><th><input type="text" name="user_name"></th><br><br>
               </tr>
           
               <tr>
                   <th><font size="4"><label>Password:</label></font></th><th><input type="password" name="passw"></th>  
               </tr>
             </table>               
              <br>
              <b><input title="Admin Login" type="submit" name="admin" value="Login" /></b>       
            
         </fieldset> 
       </form> 
    
 <?php
   /*ob_start();
   session_start();
   $servername="localhost";
   $username="root";
   $password="";
   $my_db="t-shirt and food coupon";
   $con=  mysql_connect($servername,$username,$password);
   if(!$con){
       die("Connection cannot be made....");
   }
   
  if(isset($_SESSION['loginfailed']) && $_SESSION['loginfailed']==1) echo'login failed';   
else {
echo 'fgf'; 
}  */
  
   if (isset($_POST['admin'])) {
     if(empty($_POST['user_name']) and (empty($_POST['passw']))){
          //echo "<br><br><center><font color='red' size='4'><b>Roll number/Password cannot be empty!!!!</b></font></center>";
         //exit(0);
         echo"<script>alert('User Name/password cannot be empty!!!!!.')</script>";
         exit(0);
     }  
     if(empty($_POST['user_name'])){
        // echo "<br><br><center><font color='red' size='4'><b>Roll number cannot be empty!!!!</b></font></center>";
        // exit(0);
         echo"<script>alert('User name cannot be empty!!!!!.')</script>";
         exit(0);
     }
     elseif(empty($_POST['passw'])){
        // echo "<br><br><center><font color='red' size='4'><b>Password cannot be empty!!!!</b></font></center>";
        // exit(0);
         echo"<script>alert('Password cannot be empty!!!!!.')</script>";
         exit(0);
     } 
     echo"<script>alert('User name/Password Incorrect!!!!!.')</script>";
  }
 ?>
    </body>
</html>
