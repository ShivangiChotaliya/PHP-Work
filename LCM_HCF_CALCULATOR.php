<style>
	.btn{border-color:#0000FF;
			background-color:#FF3366;
			border-width:thick;
			size:80px;
			font-size:24px;}

</style>
<html>
<h1 align="center"><font color="#CC0000">LCM And HCF Calculator</font></h1>
<form action="" method="post">
<table width="40%" border="3" align="center" bgcolor="#FF6666">
  <tr>
    <td><font size="+4">Enter Number1</font></td>
    <td><input name="no1"  size="50" style="border-width:thick" type="text" /></td>
  </tr>
   <tr>
    <td><font size="+4">Enter Number2</font></td>
    <td><input name="no2"  size="50" style="border-width:thick" type="text" /></td>
  </tr>
  <tr>
    <td align="center"><input name="hcf" type="submit" class="btn" value="Find HCF"></td>
    <td align="center"><input name="lcm" type="submit" class="btn" value="Find LCM"></td>
  </tr>
</table>
</form>
</html>
<?php 
	if(isset($_POST['hcf']) || isset($_POST['lcm']))
	{
		$n1=$_POST['no1'];
		$n2=$_POST['no2'];
		if(empty($n1) || empty($n2))
		{
		  die('Either n1 or n2 are empty.Please Enter the Number');		
		}
		echo "<center><font color='green' size='3'><b></b></font></center>";
		echo "<br/><br/>";
		if(isset($_POST['hcf']))
		{
			if($n1%$n2==0 || $n2%$n1==0)
			{
				$hcf=$n1<$n2?$n1:$n2;			
			 echo "<center><font color='red' size='7'>HCF of $n1 and $n2 is :$hcf </font></center>";
			    exit;
			}
		
		$min=min($n1,$n2);
		for($i=$min;$i>=1;$i--)
		{
		  if($n1%$i==0 && $n2%$i==0)
		  {
		   $hcf=$i;
		    echo "<center><font color='red' size='7'>HCF of $n1 and $n2 is :$hcf </font></center>";
		   echo "<center><font color='green' size='3'><b></b></font></center>";
		   echo "<br/><br/>";
			break;
		  }
		}
	}
	
	    if(isset($_POST['lcm']))
		{
			if($n1%$n2==0 || $n2%$n1==0)
			{
				$lcm=$n1>$n2?$n1:$n2; 
				echo "<br/><br/>";							
				 echo "<center><font color='red' size='7'>LCM of $n1 and $n2 is :$lcm </font></center>";
				exit;
			}
		    
			$max=max($n1,$n2);
			for($i=$max; ;$i++)
			{
			 if($i%$n1==0 && $i%$n2==0)
			 {
			  $lcm=$i;
			  echo "<center><font color='red' size='7'>LCM of $n1 and $n2 is :$lcm </font></center>";
			 
			  echo "<center><font color='green' size='3'><b></b></font></center>";
			  echo "<br/><br/>";
				break;
			 }
			}
			}
		}
?>