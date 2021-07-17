<?php
	if(isset($_POST['display']))
	{
		$n1=$_POST['n1'];
		
		$n2=$_POST['n2'];
		
		$ch=$_POST['area'];
		echo $ch;
		switch($ch)
		{
			case "circle":
					$res=circle($n1);
					$ans="<font size=+3>Area Of Circle is:=$res</font>";
					break;
			case "rectengle":
					$res=rectengle($n1,$n2);
					$ans="<font size=+3>Area Of Rectengle is:=$res</font>";
					break;
			case "triangle": 
					$res=triangle($n1,$n2);
					$ans="<font size=+3>Area Of Triangle is:=$res</font>";
					break;
			case "square":
					$res=square($n1,$n2);
					$ans="<font size=+3>Area Of Square is:=$res</font>";
					break;		
		}
	}
	function circle($r)
	{
		$res=(3.14*$r*$r);
		return $res;
	}
	function rectengle($n1,$n2)
	{
		$res=($n1*$n2);
		return $res;
	}
	function triangle($n1,$n2)
	{
		$res=(0.5*$n1*$n2);
		return $res;
	}
	function square($n1,$n2)
	{
		$res=($n1*$n2);
		return $res;
	}

?>
<html>
<h1 align="center"><font size="+3">2D Area Calculator</font></h1>
<form action="" method="post">
	<table align="center"  width="30%" border="1" width="200" border="1">
  <tr>
    <td>Enter Num1</td>
    <td><input name="n1" type="text" /></td>
  </tr>
  <tr>
    <td>Enter Num2</td>
    <td><input name="n2" type="text" /></td>
  </tr>
  <tr>
  <td>Select Any Option</td>
  <td>
		<select name="area">
			<option value="circle">Circle	</option>
			<option value="rectengle">Rectengle</option>
			<option value="triangle">Triangle</option>
			<option value="square">Square</option>
		</select>	
	</td>
	</tr>
  <tr>
  	<td colspan="2" align="center"><input type="submit" value="Display" name="display" /></td>
  </tr>
  <tr>
  	<td colspan="2"><?php if(isset($res)) echo "$ans";?></td>
  </tr>
</table>

</form>
</html>