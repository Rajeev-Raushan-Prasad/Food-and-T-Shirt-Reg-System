<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Fest Selection</title>
    <style type="text/css">
            body{
                background-color: aquamarine;
            }
     </style>
     <style type="text/css">
            .fest_sel{
                color:green;
                font-size: 20px;
                text-align: center;
                border-radius: 20px;
                padding: 2em;
                width: 200px;
                height:150px;
                margin-left:30em;
                border: 3px dotted red;
                font-weight: bold;
                -moz-box-shadow: 4px 4px 14px #000;
                -webkit-box-shadow: 4px 4px 14px #000;
                box-shadow: 4px 4px 14px #000;
             }
      </style> 
      <style>
          input{
              color:black;
              border: 3px darkblue double;
          }
       </style> 
       <style>
           #para{
               text-align: right;
               font-size: 25px;
               font-weight: bold;
               text-decoration: underline;
              
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
 <?php
  session_start();
  echo "<br><br>";
  if(isset($_SESSION['name'])){
     echo "<p id='para'>Hello"." ".$_SESSION['name'];
 }
 ?>
    <br><br><br>
    <form name="fest_select" action="update.php" method="get"> 
     <fieldset class="fest_sel">
            <legend>Fest Selection</legend>
           <select name="fest_name" style="width: 200px;height: 30px;text-align: center; font-weight: bold;border: 3px blue double;">
                <option value="Version" >Version</option>
                <option value="Festember" selected>Festember</option>
                <option value="NITTFEST" disabled>NITTFEST</option>
                <option value="Pragyan" disabled>Pragyan</option>
            </select>
            <br><br><br>
            <input type="submit" name="select" value="Next">
    </fieldset>
    </form>
    
    
 </body>
</html>
