<?php
session_start();
session_destroy();
echo "<center style='margin-top: 10%; font-size: 2em; color: red;'>Error: You have already voted<br>If this message is wrong contact your I.T officer<center>";
?>
<script type="text/javascript">
	var i=1;

	setInterval(function(){
		if (i===0) {
			window.location.replace("login.html");
		}
		i--;
	},1000)
</script>