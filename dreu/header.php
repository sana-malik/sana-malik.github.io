<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <title>dreu 2009 | sana malik</title>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
  <LINK href="dreu.css" rel="stylesheet" type="text/css">
</head>	
<body>
	<div id="header">
		<div id="title">
			<h3>DREU 2009 | Sana Malik</h3>
			<h1>Natural Language Program Analysis</h1>
		</div>
		
		<?php 
			function checkCurrent($pagename) {
				$filename = basename($_SERVER['REQUEST_URI']);
				if (!strcmp($filename,$pagename)) {
					echo "id=\"current\"";
					}
			}
		?>
		
		<div id="navigation">
			<a href="people.php" <?php checkCurrent("people.php"); ?>>researchers</a> 
			<a href="project.php" <?php checkCurrent("project.php"); ?>>our project</a> 
			<a href="journal.php" <?php checkCurrent("journal.php"); ?>>weekly journal</a> 
			<a href="index.php" <?php checkCurrent("index.php"); checkCurrent("dreu"); ?>>home</a>
		</div>
	</div>
	
	<div id="sidebar">
	<?php
	$filename = basename($_SERVER['REQUEST_URI']);
	if (!strpos($filename,".php")) {$filename = "index.php";}
	$contents = implode(file($filename));
	if (preg_match_all('/<div class=\"box\" id=\"(.+)\">\s+<div class=\"title\"><h2>(.+)<\/h2><\/div>/',$contents,$dowant,PREG_SET_ORDER)) {
		foreach ($dowant as $data) {
			echo "<a href=\"$filename#$data[1]\">$data[2]</a>\n";
		}
	}
	else {
		echo "empty page!";
	}
	?>
	</div>
