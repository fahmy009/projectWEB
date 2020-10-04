<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pendaftaran</title>
	<link rel="stylesheet" href="./assets/css/bootstrap.css">
	<style>
	body {
		margin-top: 40px;
	}
</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="panel panel-info">
					<div class="panel-heading" style="background-color: #007A87; color: #fff;"><h3 class="text-center">LOGIN</h3></div>
					<div class="panel-body">
						<form action="<?php echo $this->config['route']->getAlamatRoot().'?c=c_user&f=login'?>" method="POST">
							<div class="form-group">
								<label for="username">Username</label>
								<input type="text" name="username" class="form-control" id="username" placeholder="username" autofocus="on">
								<input type="password" name="password" class="form-control" id="password" placeholder="password" autofocus="on">
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" name="password" class="form-control" id="password" placeholder="Password">
							</div>
							<button type="submit" class="btn btn-success btn-block" style="background-color: #007A87; color: #fff; border-color: #007A87;">Login</button>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
</body>
</html>