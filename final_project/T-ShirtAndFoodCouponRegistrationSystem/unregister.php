<?php
  
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
   $rollno = $_POST['roll_no'];
   $pass = $_POST['pass'];
   $result =  mysql_query("SELECT * FROM login WHERE roll_no='$rollno' and password='$pass'") or die(mysql_error());
  /* while ($row = mysql_fetch_array($result)) {
       if($row[roll_no]===rollno){
           $flag=1;
           break;
       }
  }*/
 $count= mysql_num_rows($result);
 if($count==1){
   $sql="DELETE FROM register WHERE roll_no = '$rollno'";
   $remove=mysql_query($sql,$con);
   if($remove){
       mysql_close($con);
       include 'unreg_success.php';
   }
   else {
       include 'main_window.php';
       echo "<script>alert('Warning:You are not registered!!!!!')</script>";   
   } 
 }
 else {
      include 'unreg.php';  
      // echo"<script>alert('Invalid roll no/password')</script>";
}

?>
