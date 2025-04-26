<html>
	<head></head>
	<body>
		<?
		require_once 'Client.php';
		$client = new Client("Yaroslav", "n128a7@mail.ru");
		
		//echo $client;
		echo "<br>";
		echo Client::showCountOfclassObjects();
		echo "<br>";
		print_r(get_class_methods('client'));
		echo "<br>";
		if(method_exists($client, 'increaseNumberOfObjects')){
			echo "dddd";
		}
		echo "<br>";
		echo (property_exists('client', 'name'));
		?>		
	</body>
</html>