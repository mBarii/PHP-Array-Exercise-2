<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP Array Exercise II</title>
</head>
<body>
<?php 
echo "<h2>"."Write a PHP script to count a total number of duplicate elements in an array. <br>"."</h2>";
$a1 = file('element.txt');
$res = array_count_values($a1);
echo 'Total number of duplicated elements found in the array is : '.count($res).'<br><br>';


echo "<h2>"."Write a PHP script to count the frequency of each element of an array. <br>"."</h2>";
$fr = array_fill(0, count($a1), 0);
$check = -1;
for($i = 0; $i < count($a1); $i++)
{
	$count = 1;
	for($j = $i+1; $j < count($a1); $j++)
	{
		if($a1[$i] == $a1[$j])
		{
			$count++;
			$fr[$j] = $check;
		}
	}
	if($fr[$i] != $check)
	$fr[$i] =$count;
}

echo("The frequency of all elements of an array: <br>");
for( $i = 0; $i < count($fr); $i++)
{
	if($fr[$i] != $check)
	{
		echo( $a1[$i] ." occurs " );
		echo( $fr[$i]." times.<br>");
		echo(" ");
	}
}


echo "<h2>"."Write a PHP script to separate odd and even integers in separate arrays. <br>"."</h2>";
$oddArray = array();
$evenArray = array();
echo "Expected Output: \n";
$size = count($a1);
for ($i = 0; $i < $size; $i++) {
    echo " ";
}
$j = 0;
$k = 0;
for ($i = 0; $i < $size; $i++) {
    if ($a1[$i] % 2 == 0) {
        $evenArray[$j] = $a1[$i];
        $j++;
    } else {
        $oddArray[$k] = $a1[$i];
        $k++;
    }
}
echo "<br>\nThe Even elements are :<br> \n";
for ($i = 0; $i <= $j; $i++) {
    echo "$evenArray[$i] ";
    error_reporting(E_ERROR | E_PARSE);
}
echo "<br>\nThe Odd elements are :<br> \n";
for ($i = 0; $i <= $k; $i++) {
    echo "$oddArray[$i] ";
}
?>
</body>
</html>