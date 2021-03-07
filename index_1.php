<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Document</title>
	
</head>
<body>
<?php

$num = 1;
$txt = '';
$close = '';
$open = '';

switch ($num) {
	case 0:
		 $open = '<h5>';	 
		 $txt = 'gil';
		 $close = '</h5>';
		 break;
		 case 1:
			$open = '<h3>';
			$txt = 'gal';
			$close = '</h3>';
			break;	
	}
	echo $open.$txt.$close;

$arr = array(
	0 => 'bar',
	1 => '21533130',
	2 => '2012-02-11'
);
 for ($i = 0; $i < count($arr); $i++) {
	if ($arr[$i] === $arr[0]) {
		echo '<h1>'.$arr[0].'</h1>';
	}
	echo $arr[$i].'<br>';
	// date("Y-m-d",strtotime($value));

 }
 echo '<p>'.$arr[1].'</p>';
$borthDay = date("Y-m-d",strtotime($arr[2]));
echo '<input type="date" value="'.$borthDay.'" />';


?>
</body>
</html>


  


