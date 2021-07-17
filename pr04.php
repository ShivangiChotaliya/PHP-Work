<?php
	print_r($_POST);
	if(isset($_POST['display']))
	{
		$total=0;
		$a=array($_POST['tem']);
		
		foreach($a as $value=>$val)
		{
			foreach($val as $v)
			$total=$total+$v;				
		}
		$avg=$total/15;
		echo "Average of 15 days temprature is".round($avg,2);
		$m=max($val);
		
		echo "<br/>maximum temprature is:$m";
		$mi=min($val);
		echo "<br/>minimum temprature is:$mi";
	}


?>


<html>
<h1></h1>
<form action="" method="post">
<table align="center" border="1" width="200" border="1">
  <tr>
    <td colspan="2">
	<?php
		for($i=1;$i<15;$i++)
		{
			echo "Enter Temprature $i<input type='text' name='tem[]'><br/>";
		}
	 ?>
	
	</td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input name="display" type="submit" value="Display"></td>
  </tr>
</table>
</form>
</html>