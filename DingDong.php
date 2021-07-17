<?php
echo "<table align=center border=1><tr>";
 for($i=1;$i<=100;$i++)
 {
 	echo "<td>";
   if($i%3==0 && $i%5==0)
   {
    echo "DingDong"."<br/>";
   }
   else if($i%3==0)
   {
    echo "Ding"."<br/>";
   }
   else if($i%5==0)
   {
    echo "Dong"."<br/>";
   }
   else
   {
    echo $i."<br/>";
   }
	if($i%10==0)
	echo "</td><tr></br>"; 
 }

?>