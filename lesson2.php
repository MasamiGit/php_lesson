<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>lesson2.php</title>
	<style>
		.container {
  padding: 1%;
}

.header,
.footer {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 200px;
  background: #eee;
}

.content {
  display: flex;
  padding: 20px 0;
}

.main {
  flex: 1 0 auto;
  display: flex;
  align-items: center;
  justify-content: center;
  height: 2000px;
  margin-right: 10px;
  background: #ccc;
  background: linear-gradient(to bottom, #eeeeee 0%,#B7EAE0 100%);
}
.side {
  display: flex;
  align-items: center;
  justify-content: center;
  position: -webkit-sticky;
  position: sticky;
  top: 10px;
  width: 140px;
  height: 140px;
  color: #fff;
  background: #30b298;
}
	</style>
</head>
<body>
	<div class="container">
  <header class="header">header</header>

  <div class="content">
    <div class="main">main</div>
    <div class="side">
    	<ul>
			<li><a href="#num1">【1】Git&GitHub</a></li>
			<li><a href="#num2">【2】Gitの概要</a></li>
			<li><a href="#num3">【3】Init</a></li>
			<li><a href="#num4">【4】Status</a></li>
			<li><a href="#num5">【5】Add</a></li>
			<li><a href="#num6">【6】Commit</a></li>
			<li><a href="#num7">【7】Github</a></li>
			<li><a href="#num8">【8】Push</a></li>
			<li><a href="#num9">【9】Pull</a></li>
			<li><a href="#num10">【10】Clone</a></li>
			<li><a href="#num11">【11】Branch</a></li>
			<li><a href="#num12">【12】Remote Branch</a></li>
			<li><a href="#num13">【13】Merge</li>
			<li><a href="#num14">【14】Fetch</a></li>
			<li><a href="#num15">【15】Rebase リベース</a></li>
			<li><a href="#num16">【16】Fork</a></li>
			<li><a href="#num17">【17】Reset</a></li>
			<li><a href="#num18">【18】Revert</a></li>
			<li><a href="#num19">【19】Visual Tool</a></li>
			<li><a href="#num20">【20】GitIgnore</a></li>
		</ul>
    </div>
  </div>

  <footer class="footer">footer</footer>
</div>
</body>
</html>