<html>
<title>Basic Predefined Variables</title>
s<body bgcolor="#fafad2">
<h2>Basic Predefined Variables</h2>
<p>
Greetings, web surfer! You have reached here from
<?php echo $_SERVER['REMOTE_ADDR'] ?>
 using
<?php echo $_SERVER['HTTP_USER_AGENT']; ?>.
You came here from <? echo $_SERVER['HTTP_REFERER'];?>, and
this page was delivered to you
by the <?php echo $_SERVER['REQUEST_METHOD']; ?> method of HTTP.
<p>
<?php echo "<a href=\"{$_SERVER['HTTP_REFERER']}\"><i>Return</i></a>"; ?>
<pre>
	<?php print_r($_SERVER); ?>
</pre>
</body>
</html> 