<?php
	if(isset($_POST['display']))
	{	echo "<center>";
		$pick=$_POST['pick'];
		if(count($pick)!=10)
		{
			echo "<script>alert('Please Checked 10 Checkbox.');</script>";
			
		}
		else
		{
		$ball=range(1,80);
		
		shuffle($ball);
		$val=array_slice($ball,1,10);
		sort($val);
		$res=array_intersect($val,$pick);
		echo "Your picks:=".implode(",",$pick)."<br/>";
		echo "Ball picks:=".implode(",",$val)."<br/>";
		if(count($res)>0)
		{
		echo "Match Picks:=".implode(",",$res);
		}
		else
		{
			echo "Match Number:=0";
		}
			echo "</center>";
		}
	}
?>


<html>
<form action="" method="post">
<table align="center" width="40%" height="40%" border="1">
  <tr>
    <td align="center"><font color="#CC0000"><b>Keno Game</b></font></td>
  </tr>
  <tr>
    <td><font color="#000033">Choose 10 checkbox which would you like...</font></td>
  </tr>
  <tr>
    <td>
		<?php
			for($i=	1;$i<=80;$i++)
			{	$j=str_pad($i,2,'0',STR_PAD_LEFT);
				echo "<input type='checkbox' name='pick[]' value=$i> .$j ";
				if($i%10==0)
				echo "<br/><br/>";
			}
		?>
	</td>
  </tr>
  <tr>
  	<td>
		<input type="submit" name="display" value="PLAY">
	</td>
  </tr>
  </table>
</form>
</html