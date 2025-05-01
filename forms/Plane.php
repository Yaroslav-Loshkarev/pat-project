<?
require_once "FlyInterface.php";

class Plane implements FlyInterface {

	public function __construct(){
		echo $this->showClassName();
		echo $this->fly();
	}

	public function fly() : string {
		return PHP_EOL . "Самолет взлетел!<br>";
	}

	public function showClassName() : string{
		return PHP_EOL . "<b> Класс ". get_class($this) ."</b><br>";
	}
}
?>