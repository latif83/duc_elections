<!DOCTYPE html>
<html>
<head>
	<title>SRC | VOTING</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>
<body>

	<div class="contents">
		<a href="Register.html"> Register </a>
		<a href="login.html" style="margin-left: 2%;"> Vote </a>
	</div>

	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
		}

		body{
			background-color: black;
			background-image: url('assets/evote.jpg');
			background-size: cover;

		}

		div.contents{
			text-align: center;
			margin-top: 20%;
		}

		div.contents a{
			padding: 2%;
			text-decoration: none;
			border: 2px solid white;
			font-size: 2em;
			background-color: black;
			border-radius: 0.35rem;
			cursor: pointer;
			color: white;
			font-weight: bolder;
		}

		@media(max-width: 479px){
			div.contents{
				margin-top: 65%;
			}
			a{
				display: block;
				margin-top: 2%;
			}
		}
	</style>

</body>
</html>
