<?
require_once 'Person.php';
class Worker extends Person{
	private string $position;
	private string $section;

	public function __construct(string $name, int $age, string $position, string $section){
		parent::__construct($name, $age);
		$this->position = $position;
		$this->section = $section;
	}

	public function showInfo(){
		return parent::showInfo() . "<br>.Position: {$this->position}<br>Section: {$this->section}";
	}
}
?>