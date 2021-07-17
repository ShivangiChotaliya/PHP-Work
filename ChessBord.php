<html>
<head>
<title>Chess Bord</title>
</head>
<h1 align="center" ><font size="10">chess board</font></h1>
<table align="center" border="1">

<?php
	$r=0;
	$c=0;
	$sum=0;
	for($r=0;$r<8;$r++)
	{
	 echo "<tr>";
	for($c=1;$c<=8;$c++)
	{
		$sum=$r+$c;
		 if($sum%2==0)
	 	{
			 echo "<td height='50' width='50' bgcolor='white'></td>";
		 }
		 else
		 {
			 echo "<td height='50' width='50' bgcolor='black'></td>";
		 }
		}
			echo "</tr>";
	}
?>
</td>
</tr>
</table>
</html>