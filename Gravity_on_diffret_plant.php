<?php
	if(isset($_POST['display']))
	{	echo "hello";
		$w=$_POST['weight'];
		echo "<table width='200' border='1'>";
  		echo "<tr><td>Sun:</td><td>".$w*274 ."</td></tr>";
		echo "<tr><td>Jupiter</td><td>".$w*24.92 ."</td></tr>";
		echo "<tr><td>Neptune</td><td>".$w*11.15 ."</td></tr>";
		echo "<tr><td>Saturn</td><td>".$w*10.44 ."</td></tr>";
		echo "<tr><td>Earth</td><td>".$w*9.798 ."</td></tr>";
		echo "<tr><td>Uranus</td><td>".$w*8.87 ."</td></tr>";
		echo "<tr><td>Venus</td><td>".$w*8.87 ."</td></tr>";
		echo "<tr><td>Mars</td><td>".$w*3.71 ."</td></tr>";
		echo "<tr><td>Mercury</td><td>".$w*3.7 ."</td></tr>";
		echo "<tr><td>Moon</td><td>".$w*1.62 ."</td></tr>";
		echo "<tr><td>Pluto</td><td>".$w*0.58 ."</td></tr>";
   		echo "</table>";
    }
?>
<html>
<form method="post">
<table>
	<tr>
		<td>Enter Your Weight.</td>
		<td><input name="weight" type="text" /></td>
	</tr>
	<tr>
		<td colspan="2"><input name="display" type="submit" value="Submit" /><td>
	</tr>
</table>
</form>
</html>

