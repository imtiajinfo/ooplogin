<?php 

Class Calc{
	public $num1;
	public $sign;
	public $num2;

	public function __construct($num1, $sign, $num2){
		$this->num1 = $num1;
		$this->sign = $sign;
		$this->num2 = $num2;
	}

	public function Calculate(){
		switch($this->sign){
			case 'add':
				$result = $this->num1 + $this->num2;
				return $result;
				break;
			case 'subtraction':
				$result = $this->num1 - $this->num2;
				return $result;
				break;
			case 'multiplication':
				$result = $this->num1 * $this->num2;
				return $result;
				break;
			case 'division':
				$result = $this->num1 / $this->num2;
				return $result;
				break;
			default:
				echo "Something Wrong";
				break;
		}
	}
}


 ?>