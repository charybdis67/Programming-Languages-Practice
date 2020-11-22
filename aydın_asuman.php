<!DOCTYPE html>
<html>
<body>

<?php

function getValue($place){
	 $wedding = array("Place"=>"Çırağan", "Date"=>"10.07.2020");
	echo "the value is: " .$wedding[$place]. ".";
}

$wedding = array("Asuman Aydın"=>"Table Star", "Gülşah Kaşdoğan"=>"Table1", "Mehmet Kol"=>"Table 1");
echo "Gülşah and Mehmet are sitting at " . $wedding['Gülşah Kaşdoğan'] . ".";
echo "<br>";
foreach($wedding as $guest => $guest_table) {
  echo "Person=" . $guest . ", TableAssigned=" . $guest_table;
  echo "<br>";
}

$wedding += ["Elif Çağlar" => "Table 1"];
echo "Elif is sitting at " . $wedding['Elif Çağlar'] . ".";
echo "<br>";
echo " ";
echo "<br>";

getValue("Place");
echo "<br>";
echo " ";
echo "<br>";



unset($wedding["Asuman Aydın"]);
foreach($wedding as $guest => $guest_table) {
  echo "Person=" . $guest . ", TableAssigned=" . $guest_table;
  echo "<br>";
}
echo " ";
echo "<br>";

$wedding["Gülşah Kaşdoğan"] = "Table 2";

foreach($wedding as $guest => $guest_table) {
  echo "Person=" . $guest . ", TableAssigned=" . $guest_table;
  echo "<br>";
}

echo " ";
echo "<br>";

if (array_key_exists("Mehmet Kol",$wedding))
{
	echo "Mehmet Kol is attending to the wedding";
}
else
{
	echo "Mehmet Kol is not attending to the wedding";
}

echo "<br>";
echo " ";
echo "<br>";

if(isset($wedding['Mehmet Kol']) && $wedding['Mehmet Kol'] === 'Table 1')
{
	echo "Mehmet Kol is attending to the wedding at Table 1";

}
else
{
	echo "Mehmet Kol is not attending to the wedding";
}

?>

</body>
</html>
