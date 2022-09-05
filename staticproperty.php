<?php 

Class Father
{
	public static $name;

	public function displayName()
	{
		echo "Student Name is: ". self::$name = "Ratul";
	}
}

$obj = new Father;
$obj->displayName();


 ?>