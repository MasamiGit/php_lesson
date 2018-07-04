<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Gird-Layout</title>
</head>
<style>
*{
	margin: 0;
	padding:0;
}
	.container{
		display: grid;
		width:960px;
		margin:0 auto;
		grid-template-columns: 2fr 1fr 1fr;
		grid-template-rows: auto 1fr 3fr;
		background: aquamarine;
	}
.masthead{
	display: grid;
	grid-column: 2/4;
　　grid-row: 2/3;
	background: #ffeb3b;

}

.page-title{
	display: grid;
	grid-column: 1/4;
	grid-row: 1/2;
	background: #ffcc80;
}

.main-content{
	display: grid;
	grid-column: 1/2;
　　grid-row: 2/4;
	background: #03a9f4;
}
.sidebar{
	display: grid;
	background: #f06292;
}
.footer{
	display: grid;
	background: #0ee0f4;
}
</style>
<body>
	<div class="container">
		<div class="masthead">masthead</div>
		<div class="page-title">page-title</div>
		<div class="main-content">main-content</div>
		<div class="sidebar">sidebar</div>
		<div class="footer">footer</div>
		
	</div>
</body>
</html>