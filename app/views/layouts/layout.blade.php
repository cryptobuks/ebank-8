<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>kExi-Bank</title>
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			background-color: #FBFBFB;
		}
		footer{
			position: absolute;
			width: 100%;
			height: 70px;
			margin: auto;
			bottom: 0px;
			background-color: #0F0F0F;
		}
		#copyright{
			position: absolute;
			bottom: 0px;
			left: 20px;
		}
	</style>
</head>
<body>
	<header>kExi-Bank</header>
	<div class="login">
	@yield('content')
	<footer><div id="copyright">Copyright@Kexi Long</div></footer>
</body>
</html>