<html>  
  <head> 
    <title>PHP Exercise 2</title> 
  </head> 
  <body style="background-color:#666699; font-famil
y:sans-serif; color:#ffffff">  
<?php 
    // This version uses the multi-pass scripting technique
    if ( !$_POST['password'] ) { 
?> 
    <p><b style="color:#ffffcc">Login page:</b></p>
    <form method="post" action="">  
      <p>Enter your password below and click <b>Sub
mit</b>:</p>  
      <p><input type="password" name="password" siz
e="30" value=""></p> 
      <p><input type="submit" value="Submit"></p>  
    </form>  
<?php  
    } else if ( $_POST['password'] == "secret" ) { 
?>  
    <p style="color:#ffffcc">Your password is valid
:  
      <a style="color:#ffffff"  
        href="http://www.uom.gr/index.php?newlang=e
ng">you may enter!</a></p>  
<?php  
    } else {  
?>  
    <p>Your password is invalid: <b style="color:#f
fffcc">Please try 
again</b></p> 
<?php  
    }  
?>  
  </body>  
</html> 