<html>
<body>
<?php
$m1=array(30,50,70,40,80,50);
$m2=array("Peter"=>"40","Ben"=>"80","Joe"=>"50");
$mark1=0;
$mark2=0;
for($i=0;$i<count($m1);++$i)
{
$mark1=$mark1+$m1[$i];
}
$av1=$mark1/(count($m1));
foreach($m2 as $value)
{
$mark2=$mark2+$value;
}
$av2=$mark2/(count($m2));
echo "Average 1 = ".$av1."<br>";
echo "Average 2 = ".$av2;
?>
</body>
</html>