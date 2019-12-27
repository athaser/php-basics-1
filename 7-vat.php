<html>  
  <head> 
    <title>PHP Exercise 1</title> 
  </head> 
  <body style="background-color:#666699; font-family:sans-serif; color:#ffffff">  
<?php 
function calculate($price, $vat=0.24, &$totalprice) 
{ 
      echo "Net price: $price"; 
      $totalprice = $price * (1.0 + $vat); 
      echo "Price with VAT: $totalprice"; 
} // end of calculate function 
$price = 100.0; 

calculate($price, 0.19, $total);
echo "Price with VAT: $total<br/>";
calculate(250, 0.8, $total);
echo "Price with VAT: $total<br/>";
//calculate(1000);
?> 
  </body>  
</html> 
