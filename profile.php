<?php 
  	include ('lib/User.php');
	include ('inc/header.php');
	Session::checkSession(); 
?>

<?php
	if (isset($_GET['id'])) {
		$userid = (int)$_GET['id'];
	}
	$user = new User();

	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update']))  {
		$updateuser = $user->updateUserData($userid, $_POST);
	}
 ?>
	<div class="container">
		<div class="card">
			<div class="card-header">
				<div class="card-title">
					<h2>User Profile<span class="float-right"><a href="index.php" class="btn btn-primary">Back</a></span></h2>
				</div>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-md-6 offset-md-3">
						<?php 
							if (isset($updateuser)) {
								echo $updateuser;
							}
						 ?>
						<?php 
							$userdata = $user->getUserById($userid);
							if($userdata){
						 ?>
						<form action="" method="POST">
							<div class="form-group">
								<label for="name">Name</label>
								<input type="text" id="name" name="name" class="form-control" value="<?php echo  $userdata->name ;?>">
							</div>
							<div class="form-group">
								<label for="username">User Name</label>
								<input type="text" id="username" name="username" class="form-control" value="<?php echo  $userdata->username ;?>">
							</div>
							<div class="form-group">
								<label for="email">Email Address</label>
								<input type="text" id="email" name="email" class="form-control" value="<?php echo  $userdata->email ;?>">
							</div>
							
							<button type="submit" name="update" class="btn btn-success">Update</button>
						<?php } ?>
						</form>
					
					</div>
				</div>
				
			</div>
		</div>
	</div>
<?php include 'inc/footer.php'; ?>