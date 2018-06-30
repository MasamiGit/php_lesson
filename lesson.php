<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>Lesson PHP</title>
	<style>
	*{
		margin: 0;
		padding: 0;
	}
		h1{
			background: #f00;
			padding: 3px 5px;
			border-radius: 5px;
			margin-top:20px;
		}
		h3{
			background: #a1dafb;
			padding: 3px 5px;
			border-radius: 5px;
			margin-top: 10px;
		}
		p{
			background: #b7f9b9;
			padding: 3px 5px;
			border-radius: 5px;
			margin-bottom: 10px;
		}
		section{
			width:800px;
			margin: 0 auto;
		}
	</style>
</head>
<body>
<section>
<h1>bブランチの操作</h1>
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
</section>

<section>
<h1>リモートブランチ</h1>
<h3>ブランチをリモートに登録</h3>
<p>git puch -u origin</p>
<h3>リモートブランチからローカルブランチを作成</h3>
<p>git branch ローカルに作成するブランチ　origin/作成元のリモートのブランチ名</p></h1>
<h3>ブランチをリモートに登録</h3>
<p>git puch -u origin</p>
<h3>リモートブランチからローカルブランチを作成</h3>
<p>git branch ローカルに作成するブランチ　origin/作成元のリモートのブランチ名</p>
</section>

<section>
<h1>Merge</h1>
<h3>Branchで枝分かれしていてものをMasterに統合</h3>
<p>get merge取り込むブランチ名</p>

</section>

<section>
	<h1>【14】Fetch</h1>
	<p>get getch</p>
	<h3>pullとの違い</h3>
	<p>Pull = Fetch + Merge</p>

	<h3>Master と　origin/master の2つをもつ</h3>
	<p>Fetchはorigin/masterの情報を更新</p>
	<p>Masterの更新は行わない</p>
</section>
</body>
</html>