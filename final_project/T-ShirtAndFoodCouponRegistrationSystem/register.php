<?php
  
   //ob_start();
   session_start();
   $servername="localhost";
   $username="root";
   $password="";
   $my_db="t-shirt and food coupon";
   $con=  mysql_connect($servername,$username,$password);
   if(!$con){
       die("Connection cannot be made....");
   }
   
   mysql_select_db($my_db,$con);
   $roll=$_SESSION['roll'];
   $name=$_SESSION['name'];
   if(!isset($_POST['tshirt'])){
         $_POST['tsize']="-";     
   }
   if(!isset($_POST['food'])){
         $_POST['food']="no";         
   }
   if((!isset($_POST['tshirt'])) && (!isset($_POST['food']))){
       include 'option_choose.php';
       echo "<script>alert('Atleast one chechbox must be selected....')</script>";
       exit(0);
   }
   $sql="INSERT INTO register(roll_no,name,dept,t_size,f_coupon)
         VALUES('$roll','$name','$_POST[deptname]','$_POST[tsize]','$_POST[food]')";
   
   if(mysql_query($sql,$con)){
       include 'reg_success.php';
      // echo "<br><br>You have been successfully registered";
       mysql_close($con);
   }
 else {
       include 'option_choose.php';
       echo"<script>alert('Registration Failed!!!!!.')</script>"; 
}


?>
