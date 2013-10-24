<?php
    if(!isset($_GET["hexa"]))
	{
		function randomColorHex()
		{      
			return str_pad(dechex(rand(0, 255)), 2, '0', STR_PAD_LEFT) .
				str_pad(dechex(rand(0, 255)), 2, '0', STR_PAD_LEFT) .
				str_pad(dechex(rand(0, 255)), 2, '0', STR_PAD_LEFT);
		}
		$hexa = strtoupper(randomColorHex());
	}
	else
	{
		$hexa = htmlspecialchars(strtoupper($_GET["hexa"]));
	}
?>