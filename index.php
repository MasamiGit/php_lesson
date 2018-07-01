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

	$hako2[] = '林檎';
	$hako2[] = '梨';
	$hako2[] = '苺';
	$hako2[] = '西瓜';
	$hako2[] = '桃';
	$hako2[] = '柿kaki';
	echo $hako2[4];
	echo '<br>';
	echo $hako2[1];
	echo '<br>';
	echo $hako2[1];
	echo '<br>';
	echo $hako2[1];
	echo '<br>';
	echo $hako2[1];
	echo '<br>';

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

	echo PHP_VERSION;

	?>
<h3>ブランチの作成</h3>
<p>git branch ブランチの名前</p>
<h3>ブランチ切り替え</h3>
<p>git checkout ブランチの名前</p>
<h3>ブランチの作成と切り替えを同時に行う</h3>
<p>git checkout -b ブランチの名前</p>
<h3>ブランチ削除</h3>
<p>git branch -d ブランチの名前</p>
<h3>ブランク名の変更</h3>
<p>git branch -m ブランチの名前</p>
<h3>ローカルブランチの一覧</h3>
<p>git branch</p>
<h3>リモートとローカルのブランチ一覧</h3>
<p>git branch -a</p>
<h3>リモートブランチの一覧</h3>
<p>git branch -r</p>

<h2>Remote Branch</h2>
<h3>ブランチをリモートに登録</h3>
<p>git puch -u origin</p>
<h3>リモートブランチからローカルブランチを作成</h3>
<p>git branch ローカルに作成するブランチ　origin/作成元のリモートのブランチ名</p>

</body> 
</html>
