<?
require_once "AbstractAnimal.php";
require_once "FlyInterface.php";

class Owl extends AbstractAnimal implements FlyInterface{

public function __construct(string $skinColor, string $eyesColor){

		parent::__construct($skinColor,$eyesColor);
		echo $this->showClassName();
		echo $this->showSkinColor();
		echo $this->showEyesColor();
		echo $this->makeSound();
		echo $this->countLegs();
		echo $this->fly();
	}

	public function makeSound()  : string {
		return PHP_EOL . "Сова издает угу угу<br>";
	}

	public function countLegs() : string {
		return PHP_EOL . "У совы 2 лапы<br>";
	}

	public function fly() : string {
		return PHP_EOL . "Сова взлетела!<br>";
	}


}
?>