<?php 

# Single Inheritence


// Class Father 
// {
// 	public $phone;
// 	public $watch;

// 	public function getValue($x, $y)
// 	{
// 		$this->phone = $x;
// 		$this->watch = $y;
// 	}
// }

// Class Son extends Father
// {
// 	public function display()
// 	{
// 		echo "The Value of Phone: $this->phone<br>";
// 		echo "The Value of Watch: $this->watch";
// 	}
// }

// $result = new Son;
// $result->getValue(30000, 6000);
// $result->display();



# multilevel inheritence


// Class Father
// {
// 	public $phone;
// 	public $watch;

// 	public function getValue($x, $y)
// 	{
// 		$this->phone = $x;
// 		$this->watch = $y;
// 	}
// }

// Class Son extends Father
// {
// 	public $car = 20000000;
// 	public $total;

// 	public function add()
// 	{
// 		$this->total = $this->phone + $this->watch + $this->car;
// 		return $this->total;
// 	}
// }

// Class GrandSon extends Son
// {
// 	public function display()
// 	{
// 		echo "The value of Phone: $this->phone TK<br>";
// 		echo "The value of Watch: $this->watch TK<br>";
// 		echo "The value of Car: $this->car TK<br>";
// 		echo "Total asset value: ".$this->add()." TK";
// 	}
// }

// $result = new GrandSon;
// $result->getValue(20000, 5000);
// $result->display();

# Hierarchical Inheritence

Class Father 
{
	public $phone;
	public $watch;

	public function getValue($x, $y)
	{
		$this->phone = $x;
		$this->watch = $y;
	}
}

Class Son extends Father
{
	public function add()
	{
		return $this->phone + $this->watch;
	}

	public function display()
	{
		echo "The value of Phone: $this->phone TK<br>";
		echo "The value of Watch: $this->watch TK<br>";
		echo "Total is: ".$this->add()."<br>";
	}
}

Class Daughter extends Father
{
	public function add()
	{
		return $this->phone + $this->watch;
	}

	public function display()
	{
		echo "Daughters value of Phone: $this->phone TK<br>";
		echo "Daughters value of Watch: $this->watch TK<br>";
		echo "Total is: ".$this->add()."<br>";
	}
}

$resultSon = new Son;
$resultDaughter = new Daughter;
$resultSon->getValue(20000, 8000);
$resultSon->display();
$resultDaughter->getValue(25000, 4000);
$resultDaughter->display();

 ?>