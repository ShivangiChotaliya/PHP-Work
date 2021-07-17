<?php
	if(isset($_POST['display']))
	{
		$n1=$_POST['n1'];	
		$n2=$_POST['n2'];
		$ch=$_POST['val'];
		echo $ch;
		switch($ch)
		{
			case "lcm":
						$res=lcm($n1,$n2);
						$ans="<font size=3>LCM of $n1 and $n2 is:$res</font>";
						break;
			case "hcf":
						$res=hcf($n1,$n2);
						$ans="<font size=3>HCF of $n1 and $n2 is:$res</font>";
						break;
									
			case "both":
						$res=lcm($n1,$n2);
						$res1=hcf($n1,$n2);
						$ans="<font size=3>LCM And HCF of $n1 and $n2 is:$res And $res1</font>";
						break;			
			
		}
	}	
		function hcf($n1,$n2)
		{
			if(is_prime($n1) && is_prime($n2))
			return 1;
			if($n1%$n2==0 || $n2%$n1==0)
			{
				return min($n1,$n2);
			}
			else
			{
				$min=min($n1,$n2);
				for($i=$min;$i>=1;$i--)
				{
		  			if($n1%$i==0 && $n2%$i==0)
		 		 	{
						return $i;
					}
				}	
			}
		}
		function lcm($n1,$n2)
		{
			if(is_prime($n1) && is_prime($n2))
			return $n1*$n2	;
			if($n1%$n2==0 || $n2%$n1==0)
			{
				return max($n1,$n2);
			}
			else
			{
				$max=max($n1,$n2);
				for($i=$max; ;$i++)
				{
					 if($i%$n1==0 && $i%$n2==0)
					 {
						return $i;
					}
				}	
			}
		}
		
		function is_prime($num)
		{
			 $flag=1;
			for($i=0;$i<=$num/2;$i++)
			{
				if($num%2==0)
				{
				$flag=0;
				}
				else
				{
				$flag=1;
				}
				return $flag;
			}
		}
?>
<html>
<h1 align="center"><font size="+3">LCM And HCF Finder</font></h1>
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
  	<td colspan=""><input name="val" type="radio" value="lcm">LCM
		&nbsp;&nbsp;<input name="val" type="radio" value="hcf">HCF
		&nbsp;&nbsp;<input name="val" type="radio" value="both">BOTH
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