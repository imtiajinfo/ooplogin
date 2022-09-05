<?php 


//create class
Class Student
{
	public $name;

	public function stuName()
	{
		echo "Class Ten Student Name is: $this->name";
	}
}

// create object/instance
$classTen = new Student;
$classTen->name="Rakib";
echo $classTen->stuName();


// $classNine = new Student;
// echo $classNine->name="Sajib";



 ?>