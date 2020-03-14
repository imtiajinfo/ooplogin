<?php 

include_once 'Session.php';
include 'Database.php';

class User
{
	private $db;
	public function __construct()
	{
		$this->db = new Database();
	}

	public function userRegistration($data)
	{
		$name     = $data['name'];
		$username = $data['username'];
		$email    = $data['email'];
		$password = $data['password'];
		

		$chk_email = $this->emailCheck($email);

		if($name == "" || $username == "" || $email == "" || $password == ""){
			$msg = "<div class='alert alert-danger'><strong> Error !</strong> Field Must Not Be Empty</div>";
			return $msg;
		}

		if(strlen($username) < 4){
			$msg = "<div class='alert alert-danger'>User Name Is Too Short !</div>";
			return $msg;
		}elseif(preg_match('/[^a-z0-9_-]+/i',$username)){
			$msg = "<div class='alert alert-danger'>User Name Must only contain alphanumerical, dashes and underscore !</div>";
			return $msg;
		}

		if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
			$msg = "<div class='alert alert-danger'>The Email address is not valid !</div>";
			return $msg;
		}

		if($chk_email == true){
			$msg = "<div class='alert alert-danger'>The Email address is already exist !</div>";
			return $msg;
		}

		$password = md5($data['password']);
		$sql = "INSERT INTO tbl_user (name, username, email, password) VALUES(:name, :username, :email, :password)";
		$query = $this->db->pdo->prepare($sql);
		$query->bindValue(':name', $name);
		$query->bindValue(':username', $username);
		$query->bindValue(':email', $email);
		$query->bindValue(':password', $password);
		$result = $query->execute();

		if($result){
			$msg = "<div class='alert alert-success'>Successfully Yoy have been registerd!</div>";
			return $msg;
		}else{
			$msg = "<div class='alert alert-danger'>Sorry There have some problem to registered, Please try again!</div>";
			return $msg;
		}
	

	}


	public function emailCheck($email){
		$sql = "SELECT email FROM tbl_user WHERE email = :email";
		$query = $this->db->pdo->prepare($sql);
		$query->bindValue(':email', $email);
		$query->execute();

		if($query->rowCount() > 0){
			return true;
		}else{
			return false;
		}
	}

	public function getLoginUser($email,$password)
	{
		$sql = "SELECT * FROM tbl_user WHERE email = :email AND password = :password LIMIT 1";
		$query = $this->db->pdo->prepare($sql);
		$query->bindValue(':email', $email);
		$query->bindValue(':password', $password);
		$query->execute();
		$result = $query->fetch(PDO::FETCH_OBJ);
		return $result;
	}

	public function userLogin($data)
	{
		$email    = $data['email'];
		$password = md5($data['password']);

		$chk_email = $this->emailCheck($email);

		if($email == "" || $password == ""){
			$msg = "<div class='alert alert-danger'><strong> Error !</strong> Field Must Not Be Empty</div>";
			return $msg;
		}

		if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
			$msg = "<div class='alert alert-danger'>The Email address is not valid !</div>";
			return $msg;
		}

		if($chk_email == false){
			$msg = "<div class='alert alert-danger'>The Email address is not exist !</div>";
			return $msg;
		}

		$result = $this->getLoginUser($email, $password);
		if ($result) {
			Session::init();
			Session::set("login",true);
			Session::set("id",$result->id);
			Session::set("name",$result->name);
			Session::set("username",$result->username);
			Session::set("loginmsg","<div class='alert alert-success'><strong>Success !</strong>You are logged in!</div>");
			header("Location:index.php");
		}else{
			$msg = "<div class='alert alert-danger'>Data not found !</div>";
			return $msg;
		}
	}


	public function getUserData()
	{
		$sql = "SELECT * FROM tbl_user ORDER BY id DESC";
		$query = $this->db->pdo->prepare($sql);
		$query->execute();
		$result = $query->fetchAll();	
		return $result;
	}

	public function getUserById($id)
	{
		$sql = "SELECT * FROM tbl_user WHERE id = :id LIMIT 1";
		$query = $this->db->pdo->prepare($sql);
		$query->bindValue(':id', $id);
		$query->execute();
		$result = $query->fetch(PDO::FETCH_OBJ);
		return $result;	
	}

	public function updateUserData($id, $data)
	{
		$name     = $data['name'];
		$username = $data['username'];
		$email    = $data['email'];
		
		if($name == "" || $username == "" || $email == ""){
			$msg = "<div class='alert alert-danger'><strong> Error !</strong> Field Must Not Be Empty</div>";
			return $msg;
		}


		$sql = "UPDATE tbl_user set 
					name     = :name,
					username = :username,
					email    = :email
					WHERE id = :id";

		$query = $this->db->pdo->prepare($sql);
		$query->bindValue(':name', $name);
		$query->bindValue(':username', $username);
		$query->bindValue(':email', $email);
		$query->bindValue(':id', $id);
		$result = $query->execute();

		if($result){
			$msg = "<div class='alert alert-success'>Successfully User data updated!</div>";
			return $msg;
		}else{
			$msg = "<div class='alert alert-danger'>Sorry There have some problem to update data!</div>";
			return $msg;
		}
	}

	

}
 ?>

