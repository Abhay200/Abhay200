<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <style>
             body {
                 
  font-family: "Open Sans", sans-serif;
  height: 100vx;
  background: url("images/3.jpg")50%fixed;
  background-size: cover;
}
            .wrapper {
  margin-top: 100px;
  display: flex;
  align-items: center;
  flex-direction: column;
  justify-content: center;
  width: 100%;
  min-height: 100%;
  padding: 20px;
  background:;}
 
            .table_font{
                font-family:impact;
                font-size: 20px;
                color: orange;
            }
            #table{
                border-radius:20px;  
                margin-bottom:10px;
                margin-left:10px;
                margin-right:10px;
                margin-top: 10px;
                
            }
            
            .new{
                           
             
  width:40%;
  height: 20px;
  background: #2196F3;
  color: #fff;
  padding: 10px 20px 20px 10px;
  border-radius: 0 0 2px 2px;
}
            
        </style>
            
           
        
       
<!--        <script>
            alert("contact GT for initial ADMISSION!!!");

        </script>-->
    </head>
    <body>
        
         <div class="wrapper">
        
  <form style=" background: rgba(4,40,68,0.85);" method="POST">
      <div id="table" class="table_font">
                <table  border="0">
                    <tr>
                        <td colspan="2" align="center">
                    <h7 style=" font-size: 40px;font-family:Impact;"><font color="RED">Sign Up Now</font></h7><hr>
                </td>
                </tr>
                    <tr>
                        <td>name</td>
                         <td><input size="20" type="text" name="name" value="" /></td>
                        </td>
                    </tr>
                    <tr>
                        <td>register-number</td>
                        <td>
                             <input size="20" type="number" name="regno">
                        </td>
                    </tr>
                    <tr>
                        <td>age</td>
                        <td><input type="number" name="age" value="" /></td>
                    </tr>
                    <tr>
                        <td>gender</td>
                    <td>   
                            <input type="radio" name="Gender" value="male" selected/> male
                            <input type="radio" name="Gender" value="female"  selected/>female
                    </td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input  size="20"type="password" name="pass" value="" /></td></tr>
                    <tr>
                        <td>address</td>
                        <td>   
                            <textarea size="20" name="adress" rows="4" cols="20">
                            </textarea>
                        </td>
                    </tr>
                    
                    <tr>
                        <td colspan="2"><br>
                         <center><input type="submit" class="new" value="SIGN UP" name="sign"/></center>
                         <a href="login.php"> <font size="4" color="yellow"face="ariel">Already have an account click hear</font></a><br>
                          <a href="find_reg.php"><font size="4" color="yellow"face="ariel">Find your reg no</a></font>
                        </td>
                    </tr>
                    
                </table>
      </div>
            </form>
  
  
</div>
        
        
        
        
        <?php
        // put your code here
        if (isset($_POST["sign"])) {
            $reg = $_POST["regno"];
            $un = $_POST["name"];
//           echo $un;
            
            $pass = $_POST["pass"];
            $age = $_POST["age"];
            $add = $_POST["adress"];
            $gender = $_POST["Gender"];
            $con = mysqli_connect("localhost", "root", "", "student");
            $res = mysqli_query($con, "select * from add_student where regno=$reg") or die(mysql_error());
            $ro = mysqli_fetch_array($res);
            echo $ro["regno"]."registerd";
            if ($ro["regno"]>0) {
                
                
                
                $un2 = mysqli_query($con, "select * from register where name='$un'") or die(mysql_error());
    if (mysqli_num_rows($un2) == 0) {       
                  
                 
             $s=mysqli_query($con, "insert into register values(id,$reg,'$un',$age,'$gender','$add','$pass')") or die(mysql_error());
             if($s){
                 echo "<script>alert('Success')</script>";
                
             }
             
                }
 else {
                    echo "<script>alert('invalid reg no')</script>";
                    
 }
    
 
           
                
           
               }
               
        }
        ?>
    </body>
</html>
