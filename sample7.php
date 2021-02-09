<html>
<body>
<?php
define("Email","me@example.com<Br>");//Valid constant name
echo Email;//Displays "me@example.com"

define("myCon",true);
if(myCon) { } //Evaluates to true

define("ONECONSTANT","some value"); //Invalid constant name

define("CONSTANT","Hello World<Br>");
echo CONSTANT;//output "Hello World"
echo Constant;//output "Constant and issues a notice
define("GREETING","Hello World<br>",true);
echo GREETING; //output "Hello World"
echo Greeting;//output "Hello World";
?>
</body>
</html>