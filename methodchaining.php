<?php 


Class Buffet{

	public $dinner = 500;
	public $desert = 100;
	public $drinks = 50;
	public $bill;

	public function dinner($person)
	{
		$this->bill += $this->dinner * $person;
		return $this;
	}

	public function desert($person)
	{
		$this->bill += $this->desert * $person;
		return $this;
	} 

	public function drinks($person)
	{
		$this->bill += $this->drinks * $person;
		return $this;
	}
}

$total = new Buffet;
echo "Total Bill: ".$total->dinner(5)->desert(3)->drinks(2)->bill;




 ?>