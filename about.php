<?php
    require("genHex.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<?php include("style.php"); ?>
		<title>L'Ôde à <?php echo '#'.$hexa; ?></title>
	</head>
	<body>
		<header>
			<h1>
				A propos...
			</h1>
			<div class="line_header">|</div>
		</header>
			<div id="poem">
				L'Ôde à <strong><?php echo '#'.$hexa; ?></strong>, est l'intermédiaire<br/>
				Entre l'Homme et <strong><?php echo '#'.$hexa; ?></strong>.<br/><br/>
				Ce site lui est consacré,<br/>
				Entièrement dédié,<br/><br/>
				Et nous le chantons,<br/>
				A travers les vers de Gainsbourg.<br/><br/><br/>
			</div>
		<footer>
			<ul>
				<li> concept de <strong>Brice THOMAS</strong></li>
				<li><a href="index.php" class="visage">Index</a></li>
			</ul>
		</footer>
	</body>
</html>