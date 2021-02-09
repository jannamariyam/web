<html>
<body>
<?php
$x=10;
$y=5;
$z=2;
echo "x = 10";
echo "<br>y = 5";
echo "<br>z = 2";
echo "<br>Arithmetic Operators :";
echo "<br>x + y = ".($x+$y);
echo "<br>x - y = ".($x-$y);
echo "<br>x * y = ".($x*$y);
echo "<br>x / y = ".($x/$y);
echo "<br>x % y = ".($x%$y);
echo "<br>x ^ y =".($x**$y);
echo "<br>Comparison Operators :";
echo "<br>x == y : ".($x==$y);
echo "<br>x != y : ".($x!=$y);
echo "<br>x > y : ".($x>$y);
echo "<br>x < y : ".($x<$y);
echo "<br>Increment Operators :";
echo "<br>++z =".(++$z);
$z=2;
echo "<br>z++ =".($z++);
$z=2;
echo "<br>--z =".(--$z);
$z=2;
echo "<br>z-- =".($z--);
echo "<br>String Operators :";
$a="Hello";
$b="World";
echo "<br>a = Hello";
echo "<br>b = World";
echo "<br>".$a.$b;
$a.=$b;
echo "<br>".$a;
echo "<br>Logical Operators :";
echo "<br>x==10 and y==5 :".($x==10 and $y==5);
echo "<br>x==10 or y==0 :".($x==10 or $y==0);
echo "<br>x==10 xor y==0 :".($x==10 xor $y==0);
echo "<br>Assignment Operators :";
echo "<br>x+=y <br>x = ".($x+=$y);
echo "<br>x-=y <br>x = ".($x-=$y);
echo "<br>x*=y <br>x = ".($x*=$y);
echo "<br>x/=y <br>x = ".($x/=$y);
echo "<br>x%=y <br>x = ".($x%=$y);
?>
</body>
</html>
