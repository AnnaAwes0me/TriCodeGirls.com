<!DOCTYPE HTML>
<html>
<head>
<title>Tri Code Girls</title>
<link rel="stylesheet" type="text/css" href="tricodegirls.css">
</head>
<body>
<div class="font">
	<div class="center">
		<div class="menu">
		<div class="link1">
			<a href="/tricodegirls.php?page=tricodegirlsa">Home Page</a>
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
				readfile($vname . '.html');
				if ($vname == 'cyberstart') {
					$str = '<style>body {' .
				'background-color:#6c1478;' .
				'}</style>';		
				}
				($vname . '.html');
				if ($vname == 'tricodegirls') {
					$str = '<style>body {' .
				'background-color:#143e61;' .
				'}</style>';
					echo($str . "\n");				
				}
				($vname . '.html');
				if ($vname == 'highschool') {
					$str = '<style>body {' .
				'background-color:#800136;' .
				'}</style>';
					echo($str . "\n");				
				}
				($vname . '.html');
				if ($vname == 'middleschool') {
					$str = '<style>body {' .
				'background-color:#084704;' .
				'}</style>';
					echo($str . "\n");				
				}

			?>

</div>		
</body>
</html>
