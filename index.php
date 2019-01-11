<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PDO Ex</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="jscript.php"></script>
</head>
<body>
	<div class="container">
		<br>	<br>
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<div class="panel panel-primary">
						<div class="panel-heading">Create FORM</div>
						<div class="panel-body">
							<form action="Controller.php" method="post" id="saveForm">
								<div class="row">
									<div class="col-md-12"><div class="form-group">
										<input type="text" name="name" placeholder="Name" id="" class="form-control">
									</div></div>
									<div class="col-md-12"><div class="form-group">
										<input type="text" name="phone" placeholder="Phone" id="" class="form-control">
									</div></div>
									<div class="col-md-12"><div class="form-group">
										<a href="" class="btn btn-default pull-left" id="cancel">Cancel</a>
										<input type="submit" name="create"  value="Create" id="create" class="btn btn-primary pull-right btn-name">
									</div></div>
								</div>
							</form>
						</div>
					</div>
					<a href="" class="btn btn-warning pull-right" id="edit">Create Edit Form</a>

				</div>
			</div>

			
		</div>	
	
</body>
</html>