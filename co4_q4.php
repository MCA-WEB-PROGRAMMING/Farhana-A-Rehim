<html>
<body>
<?php
$name=array("sachin","dhoni","kohli","dravid");
echo "<table border='1' width='90'><tr><td>Index</td><td>Player Name</td></tr>";
foreach($name as $x=>$x_value)
   {
        echo "<tr><td>$x</td><td>$x_value</td></tr>";
   }
   echo "</table>";

?>
</body>
</html>