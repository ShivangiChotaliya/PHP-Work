<?php
 if(isset($_POST['check']))
 {
   $no=$_POST['mno'];
   $rno=rand(1,10);
   if($no==$rno)
   {
    $res="$no is the correct Guess.You got it right.";	
   }
   else
   {
     $res="Incorrect Guess.The correct no was $rno.You entered $no.Try Again.";	
   }
 }
?>

<html>
<title>Number Gussing Game</title>
<form method="post">
<table width="50%" height="50%" border="1" align="center" bgcolor="#FF0033">
  <tr>
    <td colspan="2" align=center><h1><b><font size="+6">Number Gussing game</font></b></h1></td>
  </tr>
  <tr>
    <td colspan="2"><b><font size="+3" color="#FFFFFF">Gess A  Number Between 1 to 10:</font></b>
    <input  name="mno" type="text"></td>
  </tr>
  <tr>
    <td colspan=2><b><font size="+2">Result:</font><?php if(isset($res)) echo $res;?></b></td>
  </tr>
   <tr>
    <td colspan="2" align="center"><input name="check"  size="19" type="submit" value="Am I Right"></td>
    
  </tr>
</table>
</form>
</html>













































