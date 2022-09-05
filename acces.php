<?php 

// Class Base
// {
// 	public $name;

// 	public function __construct($n)
// 	{
// 		$this->name = $n;
// 	}

// 	public function show()
// 	{
// 		echo "Your Name is: ".$this->name;
// 	}
// }

// $obj = new Base("Imtiaj Ahmed");
// $obj->name = "Ahmed Imtiaj";
// $obj->show();


// Class Base
// {
// 	protected $name;

// 	public function __construct($n)
// 	{
// 		$this->name = $n;
// 	}

	
// }

// Class Child extends Base
// {
// 	public function show()
// 	{
// 		echo "Your Name is: ".$this->name;
// 	}
// }

// $obj = new Child("Imtiaj Ahmed");
// // $obj->name = "Ahmed Imtiaj";
// $obj->show();

Class Base
{
	private $name;

	public function __construct($n)
	{
		$this->name = $n;
	}

	
}

Class Child extends Base
{
	public function show()
	{
		echo "Your Name is: ".$this->name;
	}
}

$obj = new Child();
$obj->name = "Ahmed Imtiaj";
$obj->show();


 ?>