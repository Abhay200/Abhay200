<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <input type="number"name="num"/>
        <iput type="submit" name="add"/>
        <?php
       if(isset($_POST["add"]))
       {
          $num=$_POST["num"];
          $dup=$num;
          $rem=0;
         $rev=0;
          while ($num>0)
          {
           $rem=$sum%10;
           $rev=$rev*10+$rem;
           $sum=$sum/10;
          }
          echo $rev;
          echo $sum;
       }
        ?>
    </body>
</html>
