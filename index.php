


<?php 

	define("DBNAME", "kinomonster");

	$nickname = "Sergey";

	$balance = 0;
	$addBalance1 = 10;
	$addBalance2 = 35;

	$balance = $addBalance1 + $addBalance2;



	$svetofor = "green";
	/*if($svetofor == "green") {
		echo "Светофор зеленый, я перехожу дорогу";
	} else if($svetofor == "yellow") {
		echo "Сейчас желтый Светофор";
	} else {
		echo "Жду когда загорится зеленый";
	}
*/
	switch ($svetofor) {
		case 'green':
			echo "Светофор зеленый, я перехожу дорогу";
			break;
		case 'yellow':
			echo "Сейчас желтый Светофор";
			break;
		
		default:
			echo "Жду когда загорится зеленый";
			break;
	}

?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	

	<div><!--Привет, --><?php //echo $nickname; ?></div>

	<?php
		/*echo "<div>".$balance."</div>";*/
		/*echo DBNAME;*/

	?>

	



</body>
</html>





