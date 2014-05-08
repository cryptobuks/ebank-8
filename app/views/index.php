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

		.login {
			width: 400px;
			height: 200px;
			position: absolute;
			left: 80%;
			top: 50%;
			margin-left: -150px;
			margin-top: -100px;
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
			color: gray;
		}
	</style>
</head>
<body>
	<header>kExi-Bank</header>
	<div class="login">
	  <form action="">
	  	<div class="form-group">
          <input type="text" placeholder="Username">
        </div>
        <div class="form-group">
          <input type="passwd" placeholder="Password">
        </div>
        <div class="form-group">
          <input type="radio" name="utype" value="Investor">Investor
          <input type="radio" name="utype" value="Admin">Admin
          <input type="radio" name="utype" value="Enterprise">Enterprise
        </div>
        <div class="form-group">
          <input id="login-btn" type="submit">
        </div>
        <div class="form-group">
          <a href="register">register?</a>
        </div>
      </form>
	</div>
	<footer><div id="copyright">Copyright@Kexi Long</div></footer>
</body>
</html>
