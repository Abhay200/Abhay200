<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>login</title>
    
    
  

    
        <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      body {
  font-family: "Open Sans", sans-serif;
  height: 100vh;
  background: url("images/1.jpg") 50% fixed;
  background-size: cover;
}

@keyframes spinner {
  0% {
    transform: rotateZ(0deg);
  }
  100% {
    transform: rotateZ(359deg);
  }
}
* {
  box-sizing: border-box;
}

.wrapper {
  display: flex;
  align-items: center;
  flex-direction: column;
  justify-content: center;
  width: 100%;
  min-height: 100%;
  padding: 20px;
  background:;}

.login {
  border-radius: 2px 2px 5px 5px;
  padding: 10px 20px 20px 20px;
  width: 90%;
  max-width: 320px;
  background: #ffffff;
  position: relative;
  padding-bottom: 80px;
  box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.3);
}
.login.loading button {
  max-height: 100%;
  padding-top: 50px;
}
.login.loading button .spinner {
  opacity: 1;
  top: 40%;
}
.login.ok button {
  background-color: #8bc34a;
}
.login.ok button .spinner {
  border-radius: 0;
  border-top-color: transparent;
  border-right-color: transparent;
  height: 20px;
  animation: none;
  transform: rotateZ(-45deg);
}
.login input {
  display: block;
  padding: 15px 10px;
  margin-bottom: 10px;
  width: 100%;
  border: 1px solid #ddd;
  transition: border-width 0.2s ease;
  border-radius: 2px;
  color: #ccc;
}
.login input + i.fa {
  color: #fff;
  font-size: 1em;
  position: absolute;
  margin-top: -47px;
  opacity: 0;
  left: 0;
  transition: all 0.1s ease-in;
}
.login input:focus {
  outline: none;
  color: #444;
  border-color: #2196F3;
  border-left-width: 35px;
}
.login input:focus + i.fa {
  opacity: 1;
  left: 30px;
  transition: all 0.25s ease-out;
}
.login a {
  font-size: 0.8em;
  color: #2196F3;
  text-decoration: none;
}

.login button {
  width: 100%;
  height: 100%;
  padding: 10px 10px;
  background: #2196F3;
  color: #fff;
  display: block;
  border: none;
  margin-top: 20px;
  position: absolute;
  left: 0;
  bottom: 0;
  max-height: 60px;
  border: 0px solid rgba(0, 0, 0, 0.1);
  border-radius: 0 0 2px 2px;
  transform: rotateZ(0deg);
  transition: all 0.1s ease-out;
  border-bottom-width: 7px;
}



    </style>

    

    
  </head>

  <body>
     

    <div class="wrapper">
        <center><h1 style=" font-size: 80px;font-family: Impact"><font color="blue">Student Management System</font></h1></center>
  <form method="POST" class="login">
    <p class="title"><h7 style=" font-size: 20px;font-family: Impact">Log in</h7></p>
    <input type="text" placeholder="Username" name="uname" autofocus/>
    
    <input type="password" placeholder="Password" name="pword" />
    
    <a href="registration.php">not a user sign up now</a><br>
   
    <button class="state" name="smit">
        Log in
    </button>
  </form>
  
  
</div>
    
<?php
 session_start();
           if(isset($_POST["smit"])){
            $n=$_POST["uname"];
            $un=$_POST["pword"];
            //mysqli_connect_connect("localhost","root","");
            $con = mysqli_connect("localhost", "root", "", "student");
            $un1 = mysqli_query($con,"select * from register") or die(mysql_error());
           //if(mysqli_num_fields($un)>0){
            while($ro=mysqli_fetch_array($un1)){
           
                 if($n==$ro["name"] && $un==$ro["pass"]) {
                    
                    $_SESSION['name']=$n;
                    header("location:studenthp.php");
                
            //}
           }
            else if($n=="admin" && $un=="admin"){
                header("location:adminhp.php");
            
                
                }
                else{
                    echo "<script>alert('log in failed')</script>";
                }
            
            }
            }
 ?>   
    
  </body>
</html>
