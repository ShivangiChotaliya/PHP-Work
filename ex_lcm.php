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
	
	function hcf($n1,$n2)
	{
		if($n1%$n2==0 || $n2%$n1==0)
		{
			return min($n1,$n2);
		}
		if(is_prime($n1) && is_prime($n2))
		{
			return 1;
		}
	}
	
	
	?>
	