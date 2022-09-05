<?php 

// Access Modifier or Visibility
// Public Access Modifire can be access from anywhere

Class A 
{
	public $name;

	public function getName()
	{
		return $this->name;
	}
}

$obj = new A;
$obj->name = "Ratul";
echo $obj->getName();
 

 ?>