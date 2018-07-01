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
		li{
			list-style-type: none;
			padding: 3px 5px;
			background: #fbf1ad;
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
<h1>【1】Git&GitHub</h1>
<h3>Gitとは</h3>
<p>バージョンコントロールシステム</p>
<ul>
	<li>スナップショットを取る</li>
</ul>
<p>ローカル環境（パソコン）</p>
<p>ウェブサイト https://git-scm.com/</p>
<p>ダウンロード</p>
<lu>
	<li>git --version</li>
</lu>

<h3>GitHubとは</h3>
<p>リモートにある。Gitを使って操作できる</p>
<ul>
	<li>チームで同じ環境を共有</li>
	<li>ローカルのバックアップ</li>
</ul>
<p>ウェブサイト https://github.com</p>
<p>ユーザー登録</p>
<ul>
	<li>フリーで利用できる</li>
	<li>有料版はプライベートで利用できる</li>
</ul>
</section>

<section>
<h1>【3】Init</h1>
<h3>git init</h3>
<p>そのフォルダーをリポジトリに変換する※.gitという隠しフォルダーを作成する</p>
<p>リポジトリとはGitが管理しているフォルダー</p>
<p>ログの表示</p>
</section>

<section>
<h1>【4】Status</h1>
<h3>git status</h3>
<p>リポジトリの状態を表示</p>
<h3>git log</h3>
<p>ログの表示</p>
</section>

<section>
<h1>【5】Add</h1>
<h3>git add 変更があったファイル</h3>
<h3>git add .</h3>
<p>変更があったファイルをステージに上げるコマンド</p>
</section>

<section>
<h1>【6】Commit</h1>
<h3>git commit</h3>
<h3>git commit -m 'first commit'</h3>
<p>コミットするときは必ずコメントを入れる必要がある</p>
</section>

<section>
<h1>【7】Github</h1>
<h3>ユーザー登録</h3>
<h3>リポジトリの作成</h3>
<h3>リポジトリの削除</h3>
</section>

<section>
<h1>【8】Push</h1>
<h3>git remote add origin https://github.com/xxxxx/xxxxxx.git</h3>
<h3>git puch -u origin master 【※プッシュしたいブランチ】</h3>
<p>GitからGitHubにアップロード</p>
</section>

<section>
<h1>【9】Pull</h1>
<h3>git pull origin master</h3>
<p>origin masterの変更を取ってくる</p>
</section>

<section>
<h1>【10】Clone</h1>
<h3>git clone http2://git.com/YYYYYY/XXXXXX.git</h3>
<p>全てのファイルをリモートからダウンロードし、Gitにクローンを作成する。</p>
</section>

<section>
<h1>【11】Branch</h1>
<h3>Master（自動）というブランチを必ず持つ</h3>
<p>ブランチ（枝分かれ）をいくつでも持つことができる</p>
<ul>
	<li>●機能の追加</li>
	<li>●バグフィックス</li>
</ul>
<h3>git branch ブランチの名前</h3>
<p>ブランチの作成</p>
<h3>git checkout 行きたいブランチの名前</h3>
<p>ブランチ切り替え</p>
<h3>git checkout -b ブランチの名前</h3>
<p>ブランチの作成と切り替えを同時に行う</p>
<h3>git branch -d ブランチの名前</h3>
<p>ブランチの削除</p>
<h3>git branch -m ブランチの名前</h3>
<p>ブランチ名の変更</p>
<h3>git branch</h3>
<p>ローカルブランチの一覧</p>
<h3>git branch -a</h3>
<p>リモートとローカルのブランチの一覧</p>
<h3>git branch -r</h3>
<p>リモートブランチの一覧</p>
</section>

<section>
<h1>【12】Remote Branch</h1>
<h3>git push -u origin</h3>
<p>ブランチをリモートに登録</p>
<h3>git branch ローカルに作成するブランチ名 origin/作成元のリモートのブランチ名</h3>
<p>ブランチをリモートに登録</p>
</section>


<section>
<h1>【13】Merge</h1>
<h3>Branchで枝分かれしていてものをMasterに統合</h3>
<p>get merge　取り込むブランチ名</p>

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



<section>
<h1>【15】Rebase リベース</h1>
<h3></h3>
<p></p>
<h3></h3>
<p></p>
</section>


<section>
<h1>【16】Fork</h1>
<h3>Forkとは</h3>
<p>他のアカウントのリポジトリを自分のアカウントにコピー</p>
<h3>Pull Requesut</h3>
<p>コピーしてきたリポジトリを変更してオリジナルにPullを要請する</p>
</section>

<section>
<h1>【17】Reset</h1>
<h3>git reset HEAD^</h3>
<p>任意の場所に戻る</p>
<p>--hard</p>
<p>--mixed</p>
<p>--soft</p>
<h3>git reset --soft HEAD^</h3>
<p>HEAD^^^</p>
<p>HEAD~3</p>
<p>@^^^</p>
</section>

<section>
<h1>【18】Revert</h1>
<h3>Revertとは</h3>
<p>コミットを取り消す新たなコミットを追加する</p>
<h3>git revert ID</h3>
<p>:wq</p>
</section>

<section>
<h1>【19】Visual Tool</h1>
<h3>Source Tree</h3>
<h3>Github Desktop</h3>
</section>

<section>
<h1>【20】GitIgnore</h1>
<h3>.gitignoreファイルを作成</h3>
<p>Gitの管理に含めないファイルを指定</p>
<ul>
	<li>●コメント</li>
	<li>#で始まる行はコメントとして扱われる</li>
</ul>
<ul>
	<li>●特定の拡張子</li>
	<li>*.exe</li>
</ul>
</section>


</body>
</html>
