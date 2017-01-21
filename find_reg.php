<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<?php
$con = mysqli_connect("localhost", "root", "", "student");
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <style>
             body {
                 
  font-family: "Open Sans", sans-serif;
  height: ;
  background: url("images/7.jpg")50%fixed;
  background-size: cover;
}
            .wrapper {
  margin-top: 00px;
  display: flex;
  align-items: center;
  flex-direction: column;
  justify-content: center;
  width: 100%;
  
  padding: 00px;
  background:;
            }
            .table_font{
                font-family:impact;
                font-size: 20px;
                color: red;
            }
            #table{
                    margin-bottom:10px;
                margin-left:10px;
                margin-right:10px;
                margin-top: 10px;
                 background:rgba(4,40,68,0.85);
                
            }
            
            .new{
                           
             
  width:40%;
  height: 20px;
  background: #2196F3;
  color: #fff;
  padding: 10px 0px 0px 10px;
  border-radius: 0 0 2px 2px;
}
            
        </style>
            
           
        
       
<!--        <script>
            alert("contact GT for initial ADMISSION!!!");

        </script>-->
    </head>
    <body>
        
         <div   class="wrapper">
        
 <div id="table"  class="table_font"  >
     
     <font color=""><center>
                    <table width="500"border="0">
                        <thead>
                            <tr>

                                <th >NAME</th>
                                <th>REG NO</th>
                                
                            </tr>
                            <tr>

                                <th colspan="2"></th>
                                
                            </tr><br>
                        </thead>
                        <?php
                        $un1 = mysqli_query($con,"select * from add_student") or die(mysql_error());

                        while ($ro = mysqli_fetch_array($un1)) {
                            ?>  <br>             
                            <tbody>

                                <tr>
                                    <td align="center" width="250"><?php echo $ro['name'] ?></td>
                                    <td align="center" width="250"><?php echo $ro['regno'] ?></td>
                                   
                                </tr>

                            </tbody>
    <?php
}
?>                 
                    </table>                    </table><a href="registration.php"><font size="4" color="yellow"face="ariel">Back</font></a></center> </font>
</center> </font>


                    
                </div>
  
</div>
        
        
        
        

    </body>
</html>
