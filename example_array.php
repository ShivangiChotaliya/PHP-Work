<?php
			$d_area[]=array("circle","rectengle","triangle","square");
			echo "<select name='d_area[]'>";
			foreach($d_area as $a)
			{
				
				echo "<option value=$a>$a</option>";
				
			}echo "</select>";
?>