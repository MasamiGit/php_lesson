<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<style>
.container {
	display: flex;
	flex-flow: row wrap;
	padding: 20px 20px 0;
	border: 3px solid #ccc;
	width:369.3px;
	align-items: stretch;
    height: 500px;

 }
  
.item{
	background:#4fc3f7;
	margin-right: 20px;
	margin-bottom: 20px;
	padding: 10px;
	color:#fff;
	font-weight: bold;
	background-image: url(img/33.png);

}
.item:last-child {
    margin-right: -1px;
}
.item:nth-child(4){
	margin-right: 0;
}
</style>
<body>
<div class="container">
  <div class="item">Item 1</div>
  <div class="item">Item 2</div>
  <div class="item">Item 3</div>
  <div class="item">Item 4</div>
  <div class="item">Item 5</div>
  <div class="item">Item 6</div>
  <div class="item">Item 7</div>
  <div class="item">Item 8</div>
</div>
</body>
</html>