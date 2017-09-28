<?php
$date =  date('Y/m/d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);
echo "<br><br> Comparison of ".$date. " & ".$tar."<br>";
if ((strtotime($date) - strtotime($tar)) < 0) {
	echo "The past.";
}elseif ((strtotime($date) - strtotime($tar)) > 0) {
	echo "The Future.";
}else {
	echo "Oops!";
}

echo "<br><br>Positions of '/' in ".$date."<br>";

$positions = array();
$pos = -1;
while (($pos = strpos($date, "/", $pos+1)) !== false) {
    $positions[] = $pos;
}

$result = implode(' ', $positions);

print_r($result);

echo "<br><br>Word count in $date <br>";
echo str_word_count($date);


echo "<br><br> String length of $date <br>";
echo strlen($date);

echo "<br><br>ASCII value of first character in $date <br>";
echo ord($date);


echo "<br><br>Last two character in $date <br>";
echo substr($date,-2);

echo "<br><br>Break $date into array with '/' and delimit by ' '<br>";
$strArr = explode("/", $date);
print_r($strArr);
echo "<br>";
$newStr = implode(' ', $strArr);
print_r($newStr);


echo "<br><br>Finding if array elements in \$year is leap or not.<br>";
echo "First by foreach<br>";
foreach ($year as $value) {
	switch ((($value % 4 == 0) && ($value % 100 != 0)) || ($value % 400 == 0)) {
		case 'true':
			echo "True ";
			break;
		default:
			echo "False ";
			break;
	}
}

echo "<br><br>Second by for loop<br>";
$len = count($year);

for ($i=0; $i < $len; $i++) {

	switch ((($year[$i] % 4 == 0) && ($year[$i] % 100 != 0)) || ($year[$i] % 400 == 0)) {
		case 'true':
			echo "True ";
			break;
		default:
			echo "False ";
			break;
	}	
}




?>