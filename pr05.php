<?php
	print_r($_POST);
	if(isset($_POST['display']))
	{
		$bif=array("string"=>array("strlen()","strrev()",""),
					"maths"=>array("round()","min()","max()"),
					"array"=>array("in_array()","array_pad()"));
					$type=$_POST['select'];
					foreach($bif as $ftype=>$func)
					{	
						if($type==$ftype)
						{
							echo"<ol>";
							foreach($func as $f)
							echo "<li>$f</li>"; 	
						}
						echo "</ol>";	
					}
	}
	else
	{
?>

<html>
<form action="" method="post">
<h1>Select function type</h1>
<table width="200" border="1">
  <tr>
    <td colspan="2"><input name="select" type="radio" value="string" />String
		<input name="select" type="radio" value="maths" />Maths
		<input name="select" type="radio" value="Array" />Array</td>
  </tr>
  <tr>
    <td colspan="2"><input name="display" type="submit" value="Display" /></td>
  </tr>
  </table>
</form>
</html>
<?php }?>