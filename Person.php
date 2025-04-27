<?
class Person{
	protected string $name;
	protected int $age;

	public function __construct(string $name, int $age){
		$this->name = $name;
		$this->age = $this->setAge($age);
	}

	protected function setAge(int $age) : int{
		if($age < 0 || $age == 0){
			return 1;
		}
		return $age;
	}

	public function showInfo(){
		$information = "Information:<br>Name: {$this->name}<br>Age: {$this->age}";
		return $information;
	}
}
?>