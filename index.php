<!DOCTYPE html>
<htm lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Document</title>
</head>
<body>
	<?php

	// $arr1 = array('a', 'b');

	// function changeArr($arr) {
	// 	$temp = $arr[0];
	// 	$arr[0] = $arr[1];
	// 	$arr[1] = $temp;
	// 	echo var_dump($arr);
	// }
	// changeArr($arr1);


	$strArr = array(
	0 => 'tim',
	1 => 'tom',
	2 => 'tam'
);
$char = 'a';
for ($i = 0; $i < count($strArr); $i++) {
	if(strpos($strArr[$i], $char)) {
		echo '=>'.$strArr[$i];
	}
}
	?>
</body>
</htm