<?
require_once 'Person.php';
class Student extends Person{
	private int $course;
	private string $studyPlace;

	public function __construct(string $name, int $age, int $course, string $studyPlace){
		parent::__construct($name, $age);
		$this->course = $this->setCourse($course);
		$this->studyPlace = $studyPlace;
	}

	private function setCourse($course){
		if($course < 0 || $course == 0){
			return 1;
		}
		return $course;
	}

	public function showInfo(){		
		return parent::showInfo() . "<br>Course: {$this->course}<br>Study of place: {$this->studyPlace}";
	}
}
?>