<!DOCTYPE HTML>
<html>
<head>
<title>Tri Code Girls - Homepage</title>
<link rel="stylesheet" type="text/css" href="tricodegirls.css">
</head>
<div class="bigDiv">
	<body>
	<div class="center">
		<div class="menu">
			<div class="link1">
			<a href="www.tricodegirls.com">Home Page</a>
			</div>
			<div class="link2">
			<a href="/highschool.html">Highschool Group</a>
			</div>
			<div class="link3">
			<a href="/middleschool.html">Middle School Group</a>
			</div>
			<div class="link4">
			<a href="/tricodegirls.php?page=cyberstart">Girls Go Cyberstart</a>
			</div>
		</div>
		<h1>Welcome to Tri Code Girls!</h1>
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
		</div>
	</div>
	</body>
</div>
</html>
