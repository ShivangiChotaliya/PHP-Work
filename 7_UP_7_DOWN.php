		<style>
  .circle{Border:2px solid;
  				border-radius:25px;
				border-color:#ff0099;
				width:90px;
				height:90px;
				color:#330033;
				background-color:#66ffff;
  				}
 

</style>


<?php 
	if(isset($_POST['7_up']) || isset($_POST['7_down']) || isset($_POST['luckey7']))
	{
		$no=$_POST['no'];
		$n1=rand(1,6);
		$n2=rand(1,6);
		$sum=$n1+$n2;
		if(isset($_POST['7_up']) && $sum>7)
		{
			$res="You Are Winner By ".(2*$no);
		}
		else if(isset($_POST['7_down']) && $sum<7)
		{
			$res="You Are Winner By ".(2*$no);
		}
		else if(isset($_POST['luckey7']) && $sum==7)
		{
			$res="You Are Winner By ".(3*$no);
		} 
		else
		{
		    $res="You Are Looser.";		
		}
		$img1=$n1.".jpg";
		$img2=$n2.".jpg";
	}
?>
<html>
<form method="post">
<table  width="70%" height="70%" align="center">
<tr>
	<td height="180" colspan="4" align="center"><img src="mid.jpg" height="250"/></td>
</tr>
<tr>
	<td width="80" height="30" colspan="4" align="right"><font size="6" color="#CC0066" >How Many Rs You Want To Bet?
	<input required size="60" style="border-width:thick" type="text"  name="no"></td>
</tr>
<tr>
	<td><input name="7_up" type="submit"  value="7_UP" class="circle" <?php if(isset($_POST['7_up'])) echo 'style="background:#CC0033; border-color:#FFFFFF; border-width:thick;"'; ?> /></td>
	<td  colspan="2" width="84"><input name="luckey7" type="submit" value="Luckey7" class="circle" <?php if(isset($_POST['luckey7'])) echo 'style="background:#CC0033; border-color:#FFFFFF; border-width:thick;"'; ?> /></td>
	<td  align="right" width="84"><input name="7_down" type="submit" value="7_DOWN" class="circle" <?php if(isset($_POST['7_down'])) echo 'style="background:#CC0033; border-color:#FFFFFF; border-width:thick;"'; ?> /></td>
</tr>
<tr>
	<td colspan="2" align="center" colspan="3"><img src="<?php if(isset($res)) echo "$img1"; ?>"></td>
	<td colspan="2" align="left" colspan="3"><img src="<?php if(isset($res)) echo "$img2"; ?>"></td>
</tr>
<tr>
	<td colspan="4" align="center" class="msg"><?php if(isset($res)) echo $res;?></td>

</tr>
</table>
</form>
</html>
