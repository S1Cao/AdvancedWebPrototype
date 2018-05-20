
<?php
$burger = array("Cheeseburger"=>"4$", "Double cheeseburger"=>"6$", "Triple cheeseburger"=>"8$");
//echo "I like " . $burger[0] . ", " . $burger[1] . " and " . $burger[2] . ".";

sort($burger);
foreach($burger as $x => $x_value){
  echo "Item: " . $x . ", Price: " . $x_value;
  echo "<br>";
}
//print_r($burger);
?>