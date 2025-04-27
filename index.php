<html>
	<head></head>
	<body>
		<?
		require_once 'Client.php';
		require_once 'Person.php';
		require_once 'Student.php';
		require_once 'Worker.php';
		
		$client = new Client("Yaroslav", "n128a7@mail.ru");	

		$person = new Person("Oleg", 32);
		echo "<b>".strtoupper(get_class($person))."</b>"."<br>";
		echo $person->showInfo()."<br>";

		echo "<br>";

		$student = new Student("Anton", 18, 1, "MSU");
		echo "<b>".strtoupper(get_class($student))."</b>"."<br>";
		echo $student->showInfo()."<br>";

		echo "<br>";

		$worker = new Worker("Nastya", 27, "Tester", "Testing");
		echo "<b>".strtoupper(get_class($worker))."</b>"."<br>";
		echo $worker->showInfo();

		?>		
	</body>
</html>