<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php echo "はじめまして。" ?>
	<?php
	$hako1 = array('0' => '','1' => 'ネコ' , '2' => '犬', '3' => '馬', '4' => '魚', '5' => '');
	echo $hako1[1];

	$hako2[] = 'momo';
	$hako2[] = 'nasi';
	$hako2[] = 'satumaimo';
	$hako2[] = 'kabotya';
	$hako2[] = 'banana';
	$hako2[] = 'ringo';
	echo $hako2[4];
	echo $hako2[1];

	$data = array(array('あ','い','う'),array('ネコ','イチゴ'),'人',array(1,2,3));
	echo $data[0][2];
	echo $data[1][1];
	echo $data[2];
	echo $data[3][2];

	define('TITLE_NAME', '定数について覚えましょう',true);
	define('DISP_KENSU',100,true);

	echo TITLE_NAME."<br>";
	echo title_name."<br>";
	echo DISP_KENSU."<br>";
	echo disp_kensu."<br>";

	echo PHP_VERSION;

	?>


</body> 
</html>
