<html>
    <head>
        <title>List Students</title>
     <style type="text/css">
table.gridtable {
	font-family: verdana,arial,sans-serif;
	font-size:15px;
	color:#333333;
	border-width: 5px;
	border-color: #666666;
	border-collapse: collapse;
        width: 50%;
}
table.gridtable th {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #666666;
	background-color: #dedede;
}
table.gridtable td {
	border-width: 3px;
	padding: 8px;
	border-style: solid;
	border-color: #666666;
	background-color: #ffffff;
        text-align: center;
}
</style>
    </head>

    <body>


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
   $sql=mysql_query("SELECT * FROM register");
   echo "<br><br><center><h1><b><u>List of Registered Students</u></b></h1><br><br></center>";
   echo "<center><table class='gridtable'>
       <tr>
           <th>Roll No.</th>
           <th>Name</th>
           <th>Dept</th>
           <th>T-Size</th>
           <th>F-Coupon</th>
           <th>Student's Signature</th>
       </tr>";
   
   while ($row = mysql_fetch_array($sql)) {
       echo "<tr>";
       echo "<td>".$row['roll_no']."</td>";
       echo "<td>".$row['name']."</td>";
       echo "<td>".$row['dept']."</td>";
       echo "<td>".$row['t_size']."</td>";
       echo "<td>".$row['f_coupon']."</td>";
       echo "<td colspan='30'>".'      '."</td>";
       echo "</tr>";
    }
   
    echo "</table></center>";
    mysql_close($con);
    echo"<br><br><br>";
    echo"<center><font size='5'><a href='admin_login.php' title='Take Printout'>Print</a></font></center>"
    
 ?>
    </body>
</html>