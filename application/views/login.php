<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>

	<link rel="stylesheet" href="assets/fonts/font-roboto.css">

<style>
	/*body{
		position: relative;
		background-color: transparent;
		background-image: url(assets/images/salman-itb-front.jpg);
		background-position: center;
		background-repeat: no-repeat;
		background-size: 100%;
		height: 100%;
	}*/
	#salman-logo{
		width: 90%;
		display: block;
		margin: auto;
		margin-bottom: 40px;
	}
	.grey-rectangle{
		display: block;
		font-family: "Roboto";
		margin-top: 90px;
		margin-left: auto;
		margin-right: auto;
		background-color: #C4C4C4;
		padding: 50px 50px 40px 50px;
		width: 200px;
	}
	button{
		display: block;
		background-color: black;
		border-color: black;
		margin-left: auto;
		margin-right: auto;
		border-width: 5px;
		border-radius: 5%;
		padding: 3px 15px 3px 15px;
		color: white;
	}
	input{
		display: block;
		width: 200px;
		height: 20px;
		border-color: transparent;
		border-width: 5px;
		border-radius: 3%;
		margin-left: auto;
		margin-right: auto;
	}
	p{
		font-style: italic;
		font-size: 12px;
	}
	#f1{
		margin-top: 13px;
		margin-bottom: 0px;
	}
</style>

</head>
<body>
	<div class="grey-rectangle">
		<a href="welcome_message"><img id="salman-logo" src="assets/images/picts/salmanLog.jpeg" alt="Salman Logo"></a>
		<form action="#">
			<p id="f1">Email</p>
			<label for=""><input type="email"></label>
			<p id="f1">Password</p>
			<label for=""><input type="password"></label>
			<p style="text-align:center;">Forget password?</p>
			<a href="<?= site_url()?>dashboard"><button type="submit">Login</button></a>
		</form>
	</div>	
</body>
</html>