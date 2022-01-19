<!DOCTYPE html>
<html>
<body>

<?php
$name=array("amna","anu","ajay","binu","cathy");
echo "Array List";
echo "<br>";
print_r($name);
echo "<br>";
asort($name);
echo "<br>";
echo "Listed sorted ascending order";
echo "<br>";
foreach($name as $x=>$x_value)
   {
   echo "Key=" . $x . ", Value=" . $x_value;
   echo "<br>";
   }
arsort($name);
echo "<br>";
echo "\nListed sorted descending order";
echo "<br>";
foreach($name as $x=>$x_value)
   {
   echo "Key=" . $x . ", Value=" . $x_value;
   echo "<br>";
   }
?>

</body>
</html>