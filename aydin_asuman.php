<!DOCTYPE html>
<html>
<body>
<?php  
$asuman = array(
    "asuman" => "aydın",
    "aydın" => "asuman",
); 
var_dump($asuman);
print_r("<br>");

$i = 0;
$asuman2 = ["asuman", "aydın"];

while($i < count($asuman2)) {
  echo $asuman2[$i] ."<br />";
  $i++;
} 

foreach ($asuman as $i => $value) {

	print_r($value);
    print_r("<br>");
}
?>  
</body>
</html>
