<?php
	if(isset($_POST['display']))
	{
		$n=$_POST['n'];
		$r=$_POST['r'];
		$n_fac=factorial($n);
		$r_fac=factorial($r);		
		$diff_n_r=factorial($n-$r);
		
		$ncr=$n_fac/($diff_n_r*$r_fac);		
		$npr=$n_fac/$diff_n_r;
		 
		 $val=$_POST['val'];
		 if($val=='ncr')
		 {
		 	$res="<font size=+3>NcR Of $n And $r Is:<b>$ncr</b></font>";
		 }
		 if($val=='npr')
		 {
		 	$res="<font size=+3>NpR Of $n And $r Is:<b>$npr</b></font>";
		 }
		
	}
		function factorial($num)
		{
			$res=1;
				for($i=2;$i<=$num;$i++)	
				{
					$res=$res*$i;
				}
			return $res;
		}
?>

<html>
<form action="" method="post">
<h1 align="center"><font size="+3">Factorial Finding</font></h1>
<table border="1" bordercolor="#993366" align="center"	 width="30%" border="1">
  <tr>
    <td>Enter Value Of n</td>
    <td><input name="n" type="text" /></td>
  </tr>
  <tr>
    <td>Enter Value Of r</td>
    <td><input name="r" type="text" /></td>
  </tr>
  <tr>
    <td><input name="val" type="radio" value="ncr" />NcR</td>
    <td><input name="val" type="radio" value="npr" />NpR</td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input name="display" type="submit" value="Display" /></td>
  </tr>
	  <tr>
  	<td colspan="2"><?php if(isset($res)) echo "$res";?></td>
  </tr>
</table>
</form>
</html>


