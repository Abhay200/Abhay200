<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <title>view attendance</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <style>
        body{
            margin:0px;
            padding:0px;
            background: url(images/1.jpg)50%fixed;
            }
            
        #container{
            margin-left:auto;
            margin-right: auto;
            margin-top:20px; 
            
            width:90%;
            height:auto;
            background-color:wight;
            
            }
        #header{
                width:100%;
                height:150px;
                background:url(images/4.jpg);
            }
        #link_bar{
                width:100%;
                height:50px;
                background:rgba(4,40,68,0.85);
                
            } 
        #a_home{
               
                width:20%;
                height:50px;
                float:left;
                background-color:;;;;;;;
            } 
         #a_add_student{
                width:20%;
                height:50px;
                float:left;
                background-color:;;;;;;;
            } 
         #a_add_marks{
                width:20%;
                height:50px;
                float:left;
                background-color:;;;;;;;
            }   
         #a_add_attendence{
               
                width:20%;
                height:50px;
                float:left;
                background-color:;;;;;;;
            } 
         #a_logout{
                width:20%;
                height:50px;
                float:left;
                background-color:;;;;;;;
            }  
        #content{
                width:100%;
                height:600px;
                background-color: slateblue;
                padding-bottom: 10px;
                 background:rgba(4,40,68,0.85);
            }  
        #footer{
                width:100%;
                height:50px;
                background-color:blueviolet;
                 background:rgba(4,40,68,0.85);
        }
        #content1{
             width:50%;
             height:500px;
             float:left;
             background:;  
        } 
        #content2{
             width:50%;
             height:500px;
             float:left;
             background:;  
        } 
              
        .font_label{ color:red;
                     font-family:impact;
                     background-color:black;
                
            }  
         .font_home{
                padding-top:18px;
         }
         .font_title{
                padding-top:50px;
                font-family:impact;
                font-size: 20px;
                color: yellow;      
            }
    </style>
    <body>
        <div id="container">
           <?php
             session_start();
             if(isset($_SESSION['name']))
                 {
                 $name=$_SESSION['name'];
             }
             ?>
            
            
            <center><div><center id="header"><center><img width="1200"height="150" src="images/4.jpg"></center></div></Center><br>
            <div id="link_bar" class="font_label">
               <a href="studenthp.php"><div id="a_home" class="font_home"><font color="red"><center>Home</center></font></div></a>
               <a href="view_mark.php"><div id="a_add_student" class="font_home"><font color="red"><center>View Mark</center></font></div></a>
               <a href="view_attendance.php"><div id="a_add_marks" class="font_home"><font color="brick"><center>View Attendance</center></font></div></a>
               <a href="aboutus.php"><div id="a_add_attendence" class="font_home"><font color="red"><center>About Us</center></font></div></a>
               <a href="login.php"><div id="a_logout" class="font_home"><font color="red"><center>Logout</center></font></div></a>
            </div><br>
          <center>  <div id="content"><font color="brickred"face="ariel"><b><i><h2>welcome <?php echo $name; ?></h2></i></b></font>
                  <div id="content1"class="font_title">
                      <center> <h7>your personal Detials</h7><br><br></center>
                      <font size="3" color="white"><center> <table width="500"height="auto" border="0">
                         <?php
                          $con = mysqli_connect("localhost", "root", "", "student");
            $un1 = mysqli_query($con,"select * from attendance where name='$name'") or die(mysql_error());
            $ro=mysqli_fetch_array($un1);
                          ?>
                              <tr>
                                  <td width="250">Name</td>
                                  <td/>: <?php echo $ro["name"]?> </td>
                              </tr>
                              <tr>
                                  <td>Attendance</td>
                                  <td>: <?php echo $ro["attendance"]?> </td>
                              </tr>
                              
                          
                      </table></center></font>
                      
                  </div>
                <div id="content2"><br><br><center><img width="500"height="300" src="images/7.jpg"></center></div>
            </div> </center><br>
       <center>    <div id="footer"><marquee direction="left"><p style="color:yellow;size:30px; ">Copyright by copz creation @2016</p></marquee>
               
             </div></center><br>
        </div>
    </body>
</html>
