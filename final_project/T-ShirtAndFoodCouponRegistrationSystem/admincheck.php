<?php
   session_start();
   $servername="localhost";
   $username="root";
   $password="";
   $my_db="t-shirt and food coupon";
   $con=  mysql_connect("$servername","$username","$password");
   if(!$con)
   {
       die("Connection cannot be open".mysql_errno());
   }
   
   $user = $_POST['user_name'];
   $pass = $_POST['passw'];
   mysql_select_db($my_db,$con);
   $result =  mysql_query("SELECT * FROM admin WHERE user_name='$user' and password='$pass'") or die(mysql_error());
   //$row = mysql_fetch_array($result); 
 
 $count= mysql_num_rows($result);
 if($count==1){
     //$_SESSION['roll'] = $_POST['roll_no'];
     //$_SESSION['name'] = $row['name'];
     header("location:list_print.php");
 }
 else {
     //$_SESSION['loginfailed']=1;
     include 'admin_login.php';
}
  
   
   
   
   



?>
