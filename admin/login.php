<?php
//include config
require_once('../includes/config.php');


//check if already logged in
if ($user->is_logged_in()) {
	header('Location: index.php');
}
?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Admin Login</title>
	<!-- <link rel="stylesheet" href="../style/main.css"> -->
	<link rel="stylesheet" href="../style/bootstrap.css">
</head>

<body>


	<?php include "../includes/navbar.php"; ?>

	<div id="login">

		<?php

		//process login form if submitted
		if (isset($_POST['submit'])) {

			$username = trim($_POST['username']);
			$password = trim($_POST['password']);

			if ($user->login($username, $password)) {

				//logged in return to index page
				header('Location: index.php');
				exit;
			} else {
				$message = '<p class="error">Wrong username or password</p>';
			}
		} //end if submit
		?>


		<div class="container py-5">
			<div class="row">
				<div class="col-md-4 mx-auto">
					<?php
					if (isset($message)) { ?>
					<div class="alert alert-danger" role="alert">
						<?php echo $message; ?>
					</div>
					<?php }
					?>
					<div class="card">
						<div class="card-header">
							Login To dashboard
						</div>
						<div class="card-body">
							<form action="" method="post">
								<div class="form-group">
									<label for="username">Username</label>
									<input class="form-control" type="text" name="username" id="username">
								</div>
								<div class="form-group">
									<label for="password">Password</label>
									<input class="form-control" type="password" name="password" id="password">
								</div>

								<div class="form-group">

									<input class="btn btn-primary" type="submit" value="Login" name="submit">
								</div>

							</form>
						</div>
					</div>

				</div>
			</div>
		</div>



	</div>
</body>

</html>