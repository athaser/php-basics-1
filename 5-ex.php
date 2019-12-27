<html>  
  <head> 
    <title>PHP Exercise 1</title> 
  </head> 
  <body style="background-color:#666699; font-family:sans-serif; color:#ffffff">  
<?php 
for ($counter = 1; $counter < 8; $counter++) 
{ 
   $sqr = pow($counter, 2); 
   echo "counter: $counter<br>"; 
   if( $sqr == 16 ) 
   { 
       echo "skipped...<br><br>"; 
       continue; /* Jumps to top w/o executing the 
                    rest of the statements in this 
                    conditional */ 
   } 
   /* This line will only print if $sqr does not eq
ual 16 */ 
   echo "Square: $sqr<br><br>"; 
} 
print "done!"; 
?> 
  </body>  
</html>