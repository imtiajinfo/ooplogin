<?php

 include 'inc/header.php'; 
 include 'lib/User.php';
 Session::checkLogin();
?>

<?php 
	$user = new User();
	if(isset($_POST['login'])){
		$userLogin = $user->userLogin($_POST);
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
							if(isset($userLogin)){
								echo $userLogin;
							}
						 ?>
						<form action="" method="POST">
							<div class="form-group">
								<label for="email">Email Address</label>
								<input type="text" id="email" name="email" class="form-control">
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" id="password" name="password" class="form-control">
							</div>
							<button type="submit" name="login" class="btn btn-success">Login</button>
						</form>
					</div>
				</div>
				
			</div>
		</div>
	</div>
<?php include 'inc/footer.php'; ?>