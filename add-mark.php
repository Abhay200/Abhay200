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
        <title>Add Marks</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <style>
        body{
            margin:0px;
            padding:0px;
            background:url(images/1.jpg)50%fixed;
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
            height:500px;
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
            width:70%;
            height:500px;
            float:left;
            background:;  
        } 

        #content2{
            width:30%;
            height:500px;
            float:left;
            background:; 
        }
        .table_font{
            font-family:impact;
            font-size: 20px;
            color: orange;
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
            font-family:Carolingia;
            font-size: 60px;
            color: orange;      
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
    <body>
        <div id="container">Admin In
            <div id="header"><center><img width="1200"height="150" src="images/4.jpg"></center></div><br>
            <div id="link_bar" class="font_label">
                <a href="adminhp.php"><div id="a_home" class="font_home"><font color="red"><center>Home</center></font></div></a>
                <a href="add-student.php"><div id="a_add_student" class="font_home"><font color="red"><center>Add student</center></font></div></a>
                <a href="add-mark.php"><div id="a_add_marks" class="font_home"><font color="brick"><center>Add marks</center></font></div></a>
                <a href="add-attendance.php"><div id="a_add_attendence" class="font_home"><font color="red"><center>Add attendence</center></font></div></a>
                <a href="login.php"><div id="a_logout" class="font_home"><font color="red"><center>Logout</center></font></div></a>
            </div><br>
            <div id="content">

                <div id="content1"><font color="white"><center><br>
                    <table width="750"border="0">
                        <thead>
                            <tr>

                                <th >NAME</th>
                                <th>PHYSICS</th>
                                <th>CHEMISTRY</th>
                                <th>MATHS</th>
                                <th>TOTAL</th>
                            </tr>
                            <tr>

                                <th colspan="5"></th>
                                
                            </tr>
                        </thead>
                        <?php
                        $un1 = mysqli_query($con, "select * from mark") or die(mysql_error());

                        while ($ro = mysqli_fetch_array($un1)) {
                            ?>  <br>             
                            <tbody>

                                <tr>
                                    <td align="center" width="150"><?php echo $ro['name'] ?></td>
                                    <td align="center" width="150"><?php echo $ro['m1'] ?></td>
                                    <td align="center" width="150"><?php echo $ro['m2'] ?></td>
                                    <td  align="center"width="150"><?php echo $ro['m3'] ?></td>
                                    <td align="center" width="150"><?php echo $ro['mark'] ?></td>
                                </tr>

                            </tbody>
    <?php
}
?>                 
                    </table></center> </font>



                </div>
                <div id="content2"class="">

                    <form method="POST"> <center><h7 style=" font-size: 30px;font-family:Impact;"><br><font color="blue">ADD MARKS</font></h7></center><hr>

                        <center> <table class="table_font" border="0">
                                <tr>
                                    <td align="center">
                                        Student-Name 
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center" >
                                        <input type="text" name="name" value="" />
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center" ><br><font size="2"color="white">
                                        mark1 :<input size="15" type="text" name="m1" value="" /><br>
                                        mark2 :<input size="15" type="text" name="m2" value="" /><br>
                                        mark3 :<input size="15" type="text" name="m3" value="" />

                                    </td>
                                </tr>


                                <tr>
                                    <td align="center" ><br>
                                        <input class="new" type="submit" name="add-mark" value="Add mark"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center" ><br>
                                        <img height="150"width="300" src="images/3.jpg"/>
                                    </td>
                                </tr>

                            </table></center>
                    </form>
<?php
if (isset($_POST["add-mark"])) {

    $n = $_POST["name"];

    $ma1 = $_POST["m1"];
    $ma2 = $_POST["m2"];
    $ma3 = $_POST["m3"];
    $ma = $ma1 + $ma2 + $ma3;
    $un2 = mysqli_query($con, "select * from mark where name='$n'") or die(mysql_error());
    if (mysqli_num_rows($un2) == 0) {
        mysqli_query($con, "insert into mark values(id,'$n',$ma1,$ma2,$ma3,$ma)") or die(mysql_error());
    } 
    else {
        echo "error";
    }
}
?>
                </diV>

            </div><br>
            <div id="footer"><marquee direction="left"><p style="color:yellow;size:30px; ">Copyright by copz creation @2016</p></marquee>

            </div><br>
        </div>






    </body>
</html>
