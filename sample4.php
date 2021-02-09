<html>
<body>
<?php
$y=10;//gobal scope
function myTest(){
$x=5;//local scope
echo "<p>Variable x inside function is : $x</p>";
echo "<p>Variable y inside function is : $y</p>";
}
myTest();
echo "<p>Variable x outside function is : $x</p>";
echo "<p>Variable y outside function is : $y</p>";
?>
</body>
</html>