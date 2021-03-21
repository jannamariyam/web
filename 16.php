<html>
<body align="center" bgcolor="pink">
<h2>Student Details</h2>
<?php

$con=mysqli_connect('localhost','root','','student');

$sql="SELECT * FROM contact";

$result = mysqli_query($con,$sql);

echo "<table border=1 align=center>";
echo "<tr><th>id</th><th>Name</th><th>Roll.no</th><th>phone no.</th></tr>";
while($row = mysqli_fetch_array($result)) {

    echo "<tr><td>".$row["id"]."</td>";
    echo "<td>".$row["Name"]."</td>";
    echo "<td>".$row["Roll.no"]."</td>";
    echo "<td>".$row["Phone no."]."</td></tr>";
}
echo "</table>";
?>
</body>
</html>