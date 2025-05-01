<?
abstract class AbstractAnimal{

	protected string $skinColor;
	protected string $eyesColor;

	public function __construct(string $skinColor , string $eyesColor){
		$this->skinColor = $skinColor;
		$this->eyesColor = $eyesColor;
	}

	public function showSkinColor() : string{
		return PHP_EOL . "Цвет шерсти " . $this->skinColor . "<br>";
	}

	public function showEyesColor() : string {
		return PHP_EOL . "Цвет глаз " . $this->eyesColor . "<br>";
	}

	public function showClassName(){
		return PHP_EOL . "<b> Класс ". get_class($this) ."</b><br>";
	}

	abstract public function makeSound() : string;

	abstract public function countLegs() : string;
}
?>