<?
require_once "AbstractAnimal.php";

class Cat extends AbstractAnimal {

	public function __construct(string $skinColor, string $eyesColor){
		parent::__construct($skinColor,$eyesColor);
		echo $this->showClassName();
		echo $this->showSkinColor();
		echo $this->showEyesColor();
		echo $this->makeSound();
		echo $this->countLegs();
	}

	public function makeSound()  : string {
		return PHP_EOL . "Кошка издает мяу мяу<br>";
	}

	public function countLegs() : string {
		return PHP_EOL . "У кошки 4 лапы<br>";
	}
}
?>