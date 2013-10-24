<?php
	function extract_line($nth, $file)
	{
		$ofile = fopen($file, "r");
		$max = fgets($ofile);
		
		$count = 1;
		$extracted_line="<strong>[ERROR] Je devrais pas être là moi !!</strong>";
		do
		{
			$extracted_line = fgets($ofile);
			$count++;
		}while($count != $nth && $count <= $max);
		fclose($ofile);
		
		return $extracted_line;
	}

	function genPoem($key, $nb_strph, $nb_vrs)
	{
		$curseur = fopen("recueil/parole.hxd", "r");
		
		$max = fgets($curseur);
		$key = hexdec($key);
		
		for($i=0;$i<$nb_strph; $i++)
		{
			echo '<p>';
			for($j=0;$j<$nb_vrs;$j++)
			{
				echo extract_line($key%$max, "recueil/parole.hxd").'<br/>';
				$key+= ($key/2);
			}
			echo '</p>';
		}
		
		fclose($curseur);
		
	}
	
	genPoem($hexa,3,4);
?>
