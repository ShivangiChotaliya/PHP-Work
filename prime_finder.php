<style>
	.btn{border-color:#0000FF;
			background-color:#FF3366;
			border-width:thick;
			size:80px;
			font-size:24px;}

</style>

<?php
	if(isset($_POST['display']))
	{
		$num=$_POST['num'];
		$flag=0;
		for($i=0;$i<=$num/2;$i++)
		{
		  if($num%2==0)
		  {
		    $flag=1;
			break;		  
		  }
		}
		
	   if($flag==1)
	   $res="$num is not a Prime Number";
	   else
	   $res="$num is a Prime Number";
	   }
 ?>
<html>
<h1 align="center"><font color="#FF0000" >Prime Finder</font></h1>
<form method="post">
<table width="50%" border="1" align="center" bgcolor="#CC9999">
  <tr>
    <td><font size="+4"> Enter Any number:</font></td>
    <td><input  size="50" style="border-width:thick" name="num" type="text"></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input name="display" size="30%" class="btn" type="submit" value="IsPrime"></td>
  </tr>
  <tr>
  	<td colspan="2" align="cernter"><center><?php if(isset($res)) echo "<font size='7'>$res</font>";?></center></td>
  </tr>
</table>
</form>
</html>
