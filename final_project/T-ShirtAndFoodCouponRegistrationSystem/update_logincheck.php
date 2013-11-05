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
   
   $rollno = $_POST['roll_no'];
   $pass = $_POST['pass'];
   mysql_select_db($my_db,$con);
   $result =  mysql_query("SELECT * FROM login WHERE roll_no='$rollno' and password='$pass'") or die(mysql_error());
   $row = mysql_fetch_array($result); 
 
 $count= mysql_num_rows($result);
 if($count==1){
     $_SESSION['roll'] = $_POST['roll_no'];
     $_SESSION['name'] = $row['name'];
     header("location:update_fest.php");
 }
 else {
     //$_SESSION['loginfailed']=1;
     include 'update_login.php"';
}
  
   
   
   
   



?>
