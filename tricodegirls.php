<!DOCTYPE HTML>
<html>
<head>
<title>Tri Code Girls - Homepage</title>
<link rel="stylesheet" type="text/css" href="tricodegirls.css">
</head>
<body>
<div class="center">
<div class="menu">
<div class="link1">
<a href="/tricodegirls.php?page=tricodegirls">Home Page</a>
</div>
<div class="link2">
<a href="/tricodegirls.php?page=highschool">Highschool Group</a>
</div>
<div class="link3">
<a href="/tricodegirls.php?page=middleschool">Middle School Group</a>
</div>
<div class="link4">
<a href="/tricodegirls.php?page=cyberstart">Girls Go Cyberstart</a>
</div>

</div>
<div class="textBody">

			<?php
				$vname = $_GET['page'];
				if (!$vname) {
					$vname = 'tricodegirls';
				}
				$pos = strpos($vname,'/');
				if ($pos !== FALSE) {
					$vname = 'tricodegirls';
				}
				readfile($vname . '.html');
			?>
			
			<?php
				if (!$vname) {
					$vname = 'middleschool'('
   				 <style type="text/css">
				body {
				background-color:#c3bee8
				}
				</style>
				  ', $#c3bee8);
				echo $styleBlock;
				}
	?>

</div>
</body>
</div>
