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
		echo $person->showClassName($person);
		echo $person->showInfo()."<br>";

		echo "<br>";

		$student = new Student("Anton", 18, 1, "MSU");
		echo $student->showClassName($student);
		echo $student->showInfo()."<br>";

		echo "<br>";

		$worker = new Worker("Nastya", 27, "Tester", "Testing");
		echo $worker->showClassName($worker);
		echo $worker->showInfo();

		?>		
	</body>
</html>