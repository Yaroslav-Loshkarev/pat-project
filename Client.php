<?
class Client{
	private string $name;
	private string $mail;
	public static int $counter = 0;

	public static function increaseNumberOfObjects(){
		return self::$counter++;
	}

	public static function showCountOfclassObjects():void{
		echo "Количество созданных объектво равно ". self::$counter;
	}

	public function __construct(string $name, string $mail){
		$this->name = $name;
		$this->mail = $mail;
		self::increaseNumberOfObjects();
	}

	public function __toString()  :string{
		return "name: $this->name, mail: $this->mail";
	}


}

?>