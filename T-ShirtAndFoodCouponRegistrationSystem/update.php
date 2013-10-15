<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Option Choose</title>
    <style>
          input{
              color: black;
              border: 3px darkblue double;
          }
     </style>
      <style type="text/css">
            body{
                background-color: aquamarine;
            }
      </style>
       <style type="text/css">
            .option_area{
                color:green;
                text-align:justify;
                border-radius: 20px;
                padding: 2em;
                width: 300px;
                height:250px;
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
    <br><br>
    <?php echo "<p><h1><u><center>".$_GET['fest_name'].' '."Registration Update</u></center></h1></p> "; ?>
    <br><br><br>
    <form name="option_choose" action="update_process.php" method="post"> 
      <fieldset class="option_area">
        <legend>Your Option</legend>
        <input type="checkbox" name="tshirt" value="tshirt">T-Shirt <br><br>
        <input type="checkbox" name="food" value="yes">Food Coupon <br><br>
        
        T-Shirt Size:
        <select name="tsize" style="width: 200px;height: 30px;text-align: center; font-weight: bold;border: 3px blue double;">
                <option value="Short" selected>Short</option>
                <option value="Medium">Medium</option>
                <option value="Large">Large</option>
                <option value="Excel">Excel</option>
                <option value="Double Excel">Double Excel</option>
        </select>
        <br><br>
         Department:
        <select name="deptname" style="width: 200px;height: 30px;text-align: center; font-weight: bold;border: 3px blue double; size: 5">
                <option value="CA" selected>CA</option>
                <option value="Chemical">Chemical Engineering</option>
                <option value="Civil">Civil Engineering</option>
                <option value="CSE">CSE</option>
                <option value="EEE">EEE</option>
                <option value="ECE">ECE</option>
                <option value="ICE">ICE</option>
                <option value="ME">ME</option>
                <option value="MME">MME</option>
                <option value="PE">PE</option>
                <option value="Architecture">Architecture</option>
                <option value="Mang. Studies">Management Studies</option>
                <option value="Mathematics">Mathematics</option>
                <option value="Chemistry">Chemistry</option>
                <option value="Physics">Physics</option>
                <option value="Humanities">Humanities</option>
        </select>
      </fieldset>
      <br><br><br>
      <center>
        <input title="Register" type="submit" name="register" value="Done" />
      </center>
    </form>

<?php
//ob_start();
 //session_start();
// echo "<br><br>";
 /* if(isset($_SESSION['roll'])){
     $roll1 = $_SESSION['roll'];
     echo "roll number:".$roll1;
 } */

?>
    
    
 </body>
</html>
