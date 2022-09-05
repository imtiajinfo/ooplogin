<?php 


// Cannot access protected property or method outside class or object
// Protectded property or method can be access within same class and Child class and Grandchildclass

Class Father{
	protected $a;

	public function displayParent()
	{
		$this->a = 20;
		echo "Parent value is: $this->a";
	}
}

$obj = new Father;
$obj->displayParent();

 ?>