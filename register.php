<?php

 include 'inc/header.php'; 
 include 'lib/User.php';
?>

<?php 
	$user = new User();
	if(isset($_POST['register'])){
		$userReg = $user->userRegistration($_POST);
	}
 ?>
	<div class="container">
		<div class="card">
			<div class="card-header">
				<div class="card-title">
					<h2>User Login</h2>
				</div>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-md-6 offset-md-3">
						<?php 
							if(isset($userReg)){
								echo $userReg;
							}
						 ?>
						<form action="" method="POST">
							<div class="form-group">
								<label for="name">Name</label>
								<input type="text" id="name" name="name" class="form-control">
							</div>
							<div class="form-group">
								<label for="username">User Name</label>
								<input type="text" id="username" name="username" class="form-control">
							</div>
							<div class="form-group">
								<label for="email">Email Address</label>
								<input type="text" id="email" name="email" class="form-control">
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" id="password" name="password" class="form-control">
							</div>
							<button type="submit" name="register" class="btn btn-success">Submit</button>
						</form>
					</div>
				</div>
				
			</div>
		</div>
	</div>
<?php include 'inc/footer.php'; ?>