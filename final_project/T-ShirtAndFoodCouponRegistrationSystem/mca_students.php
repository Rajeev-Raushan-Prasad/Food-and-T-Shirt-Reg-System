<!DOCTYPE html>
<html>
   <head>
         <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>MCA Students</title>
     <style type="text/css">
            body{
                background-color: aquamarine;
            }
     </style> 
     <style type="text/css">
         .heading{
             text-align: center;
             font-size: 50px;
             font-weight: bold;
             color: red;
         }
     </style>
      <style type="text/css">
            .mca_area{
                color:green;
                text-align:justify;
                border-radius: 20px;
                padding: 2em;
                width: 300px;
                height:150px;
                margin-left:35em;
                border: 3px dotted red;
                font-weight: bold;
             }
        </style>   
        <style>
          input{
              color: red;
              font-weight: bold;
              border: 3px darkblue double;
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
       <p class="heading"><u>Only For MCA Students</u></p>  
       <br><br>
       <form name="mca_choose" id="get"> <!-- modify here.... -->
       <fieldset class="mca_area">
        <legend>Your Option</legend>
        <input type="checkbox" name="T-Shirt" value="on">T-Shirt <br><br>
        T-Shirt Size:
        <select name="dropdown1" style="width: 200px;height: 30px;text-align: center; font-weight: bold;border: 3px blue double;color: red;">
                <option value="Short" selected>Short</option>
                <option value="Medium">Medium</option>
                <option value="Large">Large</option>
                <option value="Excel">Excel</option>
                <option value="Double Excel">Double Excel</option>
        </select>
        <br><br>
         
      </fieldset>
      <br><br><br>
      <center>
        <input type="submit" name="register" value="Done" />
      </center>
    </form>
        

 
 <?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
 ?>
 </body>
    
    
</html>    