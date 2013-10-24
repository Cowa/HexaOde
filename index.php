<?php
    require("genHex.php");
?>
<!-- Concept original par Brice THOMAS, 2012 -->
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
				Ôde à <strong><?php echo '#'.$hexa; ?></strong>
			</h1>
			<div class="line_header">|</div>
		</header>
		<div id="poem">
				<?php include("genPoem.php"); ?>
		</div>
		<footer>
			<ul>
				<li><a href="about.php" class="visage">A propos</a></li>
				<li>Vers de <strong>S. Gainsbourg</strong></li>	
			</ul>
		</footer>
	</body>
</html>
