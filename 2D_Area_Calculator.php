<?php
	//print_r($_POST);
	if(isset($_POST['display']))
	{
		$ch=$_POST['area'];
		echo $ch;
		
		switch($ch)
		{ 
			case "circle":
					if(isset($_POST['display1']))
					{
						$rad=$_POST['radius'];
						echo $rad;
					}
							
		}
	}
	function circle($r)
	{
		$res=(3.14*$r*$r);
		return res;
	}
		
?>

<html>
<h1 align="center"><font size="+3">2D Area Calculator</font></h1>
<form action="" method="post">
<table  align="center" width="200" border="1">
  <tr>
    <td>Select Any Option</td>
    <td>
		<select name="area">
			<option value="circle">Circle</option>
			<option value="rectengle">Rectengle</option>
			<option value="triangle">Triangle</option>
			<option value="square">Square</option>
		</select>	
	</td>
  </tr>
  <tr>
  	<td colspan="2">
		<?php 
			echo "Enter Radius:<input type=text name=radius><br/><input type=submit value=display1>";
			if(isset($_POST['display1']))
					{
						$rad=$_POST['radius'];
						echo $rad;
					}
		?>
	</td>
  </tr>
  </td>
  <tr>
    <td align="center" colspan="2"><input name="display" type="submit" value="Display"></td>
  </tr>
</table>

</form>
</html>