<?php
echo "<b>Booleans</b>.<br>\n";
$yes = TRUE;
$no = FALSE;
$maybe = 5 > 4;
echo "[$yes] [$no] [$maybe]<p>\n"; 
// Integers
$int = 45;
$oct = 045;
$hex = 0x45;
$div = 5/6;
echo "<b>Integer:</b> $int $oct $hex $div<p>\n";
// Floats
$x = 4.5;
$y = 2.1e17;
echo "<b>Float:</b> $x $y<p>\n";
// Lots of things to do with strings.
echo "<b>Strings:</b><br>";
$fred = "Tim";
$freds = "Willoby";
$barney = "fred";
echo "$fred $freds ${fred}s ${fred}s<br>";
echo "${barney} ${$barney}<br>";
$mike = $fred . '-' . $barney;
echo "$mike $fred[2]<br>";
echo $ss;
echo "<br>$fred and $barney went to the movies.";
echo '<br>$fred and $barney went to the movies.';
?> 