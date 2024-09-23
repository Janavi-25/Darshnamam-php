<?php
$x="abc"; 
$$x=1000;

echo "x=".$x;
echo "reference of x is =".$$x;
echo "<br> x=".$abc;

$name= "Janavi ";
$$name="Parmar";
echo "my name is $name".$$name;

?>