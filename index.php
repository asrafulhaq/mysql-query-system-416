<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	
	<?php  


	/**
	 * Student Data form setup 
	 */

	if ( isset($_POST['add']) ) {
		
		// Value get 
		$name = $_POST['name'];
		$email = $_POST['email'];
		$cell = $_POST['cell'];
		$uname = $_POST['uname'];
		$location = $_POST['location'];
		$age = $_POST['age'];
		$gender = $_POST['gender'];
		$status = $_POST['status'];

		// File Upload 
		$image = $_FILES['photo'];




		




	}










	?>

	<div class="wrap ">
		<a class="btn btn-sm btn-primary" href="table.php">All data</a>
		<div class="card shadow">
			<div class="card-body">
				<h2>Sign Up</h2>
				<form action="" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label for="">Name</label>
						<input name="name" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input name="email" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input name="cell" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Username</label>
						<input name="uname" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Location</label>
						<select name="location" class="form-control" id="">
							<option value="">-select-</option>
							<option value="Mirpur">Mirpur</option>
							<option value="Banani">Banani</option>
							<option value="Uttara">Uttara</option>
							<option value="Dhanmondi">Dhanmondi</option>
							<option value="Badda">Badda</option>
							<option value="Others">Others</option>
						</select>
					</div>
					<div class="form-group">
						<label for="">Age</label>
						<input name="age" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Gender</label>
						<br>
						<input name="gender" type="radio" value="Male" id="mmm"> <label for="mmm">Male</label>
						<input name="gender" type="radio" value="Female" id="fff"> <label for="fff">Female</label>
					</div>
					<div class="form-group">
						<label for="">Photo</label>
						<input name="photo" class="form-control" type="file">
					</div>

					<div class="form-group">
						<input name="status" type="checkbox" checked value="Published"  id="status"> <label for="status">Published</label>
					</div>


					<div class="form-group">
						<input name="add" class="btn btn-primary" type="submit" value="Add student">
					</div>
				</form>
			</div>
		</div>
	</div>
	







	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>