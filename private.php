<?php 

// Private property or method can be access only within same class

// Private property or method can't be access outside class or with object

// In Inheritence, Child class can't access Parent's property or method


Class Student 
{
	private $name = "Ratul";

	public function getName()
	{

		echo "Student name is: $this->name";
	}
}

$obj = new Student;
echo $obj->getName();
 ?>