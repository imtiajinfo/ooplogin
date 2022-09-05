<?php 

// Default Constructor
/* 
Class Student 
{
	public function __construct()
	{
		echo "This is a Constructor";
	}
}

new Student;
*/

Class Student 
{
	public $department;

	public function __construct($admission)
	{
		echo "Total Admitted Student: ";
		$this->department = $admission;
		echo $this->department;
	}
}

$obj = new Student(10);


 ?>