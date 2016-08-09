<!-- Default HTML File for the Nginx and PHP-FPM-->
<html>
<head>
	<title>Welcome to Nginx Server</title>
</head>
<body>
	<center>
		<h1>Welcome to Nginx Server !!!</h1>
		<h2>Your nginx container is working fine.</h2>
	</center>
	<center>
		<?php
			$db_host = $_ENV{'DB_HOST'};
			echo $db_host;
			$link   = new mysqli('docker-mariadb', 'wordpress', 'wordpress', 'wordpress');
			$status = explode('  ', mysqli_stat($link));
			print_r($status);
		?>
	</center>
	<?php
		phpinfo();
	?>
</body>
</html>
