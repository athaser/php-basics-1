<?php 
// Normal functions operate using pass-by-value.  Parameters do not have 
// types, though. 
function fred($tv, $n1, $n2) 
{ 
        echo "The $n1 $tv the $n2 quickly.<br>\n"; 
        echo "The $n2 was worthless anyway.<br>\n";
} 
fred('broke', 'rock', 'window'); 
fred('traversed', 'train', 'track'); 
print '<p>'; 
// Default values are permitted. 
function nimrod($n, $adj = "red", $v = "carried") 
{ 
        echo "The $n $v the $adj truck.<br>"; 
} 
nimrod('van', 'blue', 'pulled'); 
nimrod('wagon'); 
nimrod('ship', 'broken'); 
print "<p>\n"; 
// Return values, too. 
function snark($a, $b, $w, $s = ' ') 
{ 
        $len = strlen($a) + strlen($b); 
        $w -= $len; 
        if($w < 0) $w = 0; 
        $bl = ''; 
        while($w--) $bl = $bl . $s; 
        return "$a $bl $b"; 
} 
echo "<tt><pre>", snark('Snails', 15.31, 40), "</pre></tt><br>\n"; 
echo "<tt>", snark('Fuzz', 31, 40, '&nbsp;'), "</tt><br>\n"; 
echo snark('Crud', '(ask)', 40, '.'), "<p>\n"; 
?> 