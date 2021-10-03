<!DOCTYPE html>
<html>
<head>
	<title>Success</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/logo.png">
</head>
<body>

    <div id="redirect"></div>

<div id="display"><img src="assets/success.png"><span id="s">Voting Successful...</span>

</div>


	<style type="text/css">
		body{
            background-image: url('assets/success.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }
        div{
        	text-align: center;
        	margin-top: 5%;
        	margin:auto;
        	margin-top: 5%;
        	background: #ffffff10;
        	width: 80%;
        	padding: 2%;
            font-size: 1.5em;
        }
        img{
        	display: inline;
        	height: 100px;
        	width: 100px;
        }
        span#s{
        	
        	padding: .5%;
        	font-size: 1.7em;
        	display: inline;
        	height: 100px;
        	font-weight: bolder;
        	color: blue;
        }

        #redirect{
            background: transparent;
            color: red;
            text-transform: uppercase;
            font-size: 1.6em;
            font-weight: bolder;
            position: absolute;
            top: -80px;
            display: none;
        }
	</style>

    <script type="text/javascript">
        var i=3;

        setInterval(function(){
            console.log(i);
            document.getElementById('redirect').innerText="re-directing in "+i;
            i--;
            if (i==0) {
                window.location.replace("login.html");
            }
        },1000);
    </script>

	<!--script type="text/javascript">
		var display=document.getElementById('display');
		var request=new XMLHttpRequest();
		var url="http://localhost/DOMINIONSRC/user.php";
		request.open("GET",url,true);
		request.onreadystatechange=function(){
			if (this.readyState==4) display.innerHTML=this.responseText;
		}
		request.send();
	</script-->

</body>
</html>