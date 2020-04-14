


<?php 

/*$i = 1;*/
/*
while($i <= 10) {
	echo $i."<br>";
	$i++;
}
*/
/*do {
	echo $i."<br>";
	$i++;
} while($i <= 10);

*/
/*for($i = 0; $i <= 10; $i++) {
	echo $i."<br>";
}*/

/*$arr[0] = "Продукты";
$arr[1] = "Bottle";*/

/*for ($i = 0; $i < count($arr); $i++) { 
	echo $arr[$i]."<br>";
}*/

/*$arr = array("на титул Грэмми" => "Веном", "на титул топ из 5" => "Дэдпул");*/
/*$arr = ["Безумный Макс", "Инстерстеллар", "Джентельмены","Росомаха"];*/
/*$arr = ["на титул Грэмми" =>"Рэкетир", "на титул топ из 5" => "Районы"];*/
$arr = ["продукты", "бутылка с водой"];
/*unset($arr[0]);*/
array_push($arr, "яблоко");
array_unshift($arr, "апельсин");
array_push($arr, "апельсин");
$arr = array_unique($arr);
/*$arr = array_reverse($arr);*/
/*sort($arr);*/
/*shuffle($arr);*/
$arr2 = array("Кокос", "арбуз");
$newarr = array_merge($arr, $arr2);

foreach ($newarr as $key => $value) {
	echo "Фильм  ".$key. " - Занимает ".$value."<br>";
}

/*$str = implode(", /", $newarr);
echo "<br>".$str;*/
$str = "продукты, бутылка с водой, Кокос";
$strtoarr = explode(",",$str);

echo "<pre>";
print_r($strtoarr);
echo "</pre>";

/*$camera["market1"]["row1"][0] = "продукты";
$camera["market1"]["row1"][1] = "штырь";
$camera["market2"]["row2"][0] = "аспирин";
$camera["market2"]["row2"][1] = "амфитамины";
$camera["market2"]["row2"][2] = "андроид";*/

$camera = array(
	"kera1"=>array(
		"row1"=>array(
			"продукты", "сумка"
		),
		"row2"=>array(
			"orange","lamp", "rabbit"
		)
	),
	"kera2"=>array(
		"man1"=>array(
			"продукты", "сумка"
		),
		"row2"=>array(
			"orange","lamp", "rabbit"
		)
	),
	"kera7"=>array(
		"man2"=>array(
			"продукты", "сумка"
		),
		"row2"=>array(
			"orange","lamp", "rabbit"
		)
	)
);

echo "<pre>";
print_r($camera);
echo "</pre>";

foreach ($camera as $key => $value) {
	foreach ($value as $key2 => $value2) {
		foreach ($value2 as $key3 => $value3) {
			echo $value3;
		}
	}
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	

</body>
</html>





