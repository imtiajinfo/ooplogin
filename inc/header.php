<?php 
  $filepath = realpath(dirname(__FILE__));
  include_once $filepath.'/../lib/Session.php';
  Session::init();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP LOGIN SYSTEM</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

</head>
<?php 
if (isset($_GET['action']) && $_GET['action'] == "logout") {
   Session::destroy();
 } ?>
<body>
	
<!-- navbar begin -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container">
		<a class="navbar-brand" href="index.php">Project</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <?php 
        $id = Session::get("id");
        $userlogin = Session::get("login");
        if ($userlogin == true) {
        ?> 
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="profile.php?id=<?php echo $id; ?>">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?action=logout">Logout</a>
            </li>
      <?php }else{ ?>
            <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="register.php">Register</a>
            </li>
     <?php  } ?>
      
    </ul>
  </div>
  </div>
</nav>