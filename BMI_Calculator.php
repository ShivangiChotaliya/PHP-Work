<style>
	.btn{border-color:#0000FF;
			background-color:#FF3366;
			border-width:thick;
			size:80px;
			font-size:24px;}

</style>
<?php 
	print_r($_POST);
	if(isset($_POST['display']))
	{
		$h=$_POST['h'];
		$w=$_POST['w'];
		$r=$w/($h*$h);
		$r=round($r,2);
		echo "BMI=".$r;
		$healthyness=" ";
		if($r<15)
		$healthyness="Very Severly Under Weight.";
		if($r>=15 && $r<16)
		$healthyness="Severly Underweight";
		if($r>=16 && $r<18.5)
		$healthyness="Under weight";
        if($r>=18.5 && $r<25)
		$healthyness="normal";
		if($r>=25 && $r<30)
		$healthyness="Over weight";	
	    if($r>=30 && $r<35)
		$healthyness="moderatly obese";
		if($r>=35 && $r<40)
		$healthyness="Severly obese";
		if($r>=40)
		$healthyness="Very Severly or moderatly obese";
	}
?>


<html>
<form method="post">
<h1 align="center">Body Mass Index</h1>  
<table align="center" bgcolor="#CC99CC" width="40%" border="1">
 <tr>
    <td colspan="2" bgcolor="#FF6633" align="center"><font size="4">A Measure Of Body That In Adult</font></td>
  </tr> 
  <tr>
    <td colspan="2" bgcolor="#FF3366" align="center"><font size="+6">Weight</font><br/>
    <input name="w" size="50" style="border-width:thick" type="text" value="<?php if(isset($w)) echo $w;?>">(Kg)</td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#FF6633" align="center"><font size="+6">Height</font><br/>
    <input name="h" size="50" style="border-width:thick" type="text" value="<?php if(isset($h)) echo $h;?>">(m)</td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#FF3366" align="center"><input name="display" type="submit" size="30%"	class="btn" value="Calculate"></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#FF6633" align="center"><font size="+6">Your BMI<br/>
     <input name="res" size="30" readonly style="border-width:thick" type="text" value="<?php if(isset($r)) echo $r;?>"</td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#FF3366" align="center"><?php if(isset($healthyness)) echo "<font size='7'>You Are $healthyness </font>";?></td>
  </tr>
  <tr>
</table>
</form>
</html>
