<?php /* Template Name: Form Template */ ?>

<!-- 
	1) Create two pages -- Form and Form Render
	2) Set template name of form page Form Template and form render page to Form Render
	2) replace form action of this page with permalink of form render page

-->

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>

<!-- put action = form render url!! -->
<form style="margin: 50px auto; width: fit-content;" method="POST" action="http://localhost:2000/?page_id=7">
	
	<div class="form-group">
		<label>Name</label>
		<input type="text" name="first_name" id="first_name" placeholder="First Name" required>
		<input type="text" name="middle_name" id="middle_name" placeholder="Middle Name">
		<input type="text" name="last_name" id="last_name" placeholder="Last Name" required>
	</div>

	<div class="form-group">
		<label>Gender</label>
		<input type="radio" name="gender" value="male"> <span>Male</span>
		<input type="radio" name="gender" value="female"> <span>Female</span><br>
	</div>

	<div class="form-group">
		<label>Email</label>
		<input type="email" name="email" placeholder="email" required>
	</div>

	<div class="form-group">
		<label>Phone</label>
		<input type="number" name="phone_personal" placeholder="Mobile no personal" required>
		<input type="number" name="phone_parent" placeholder="Mobile no parent" required>
	</div>

	<div class="form-group">
		<label>Address</label><br>
		<textarea name="address" placeholder="Type your address here" required></textarea>
	</div>

	<div class="form-group">
		<label>Department</label>
		<input type="text" name="department" placeholder="department" required>
		<input type="text" name="batch" placeholder="Enter your Batch (A,B,C,D)" required>
	</div>

	<div class="form-group">
		<label>University Number</label>
		<input type="number" name="uni_number" placeholder="University Number" required>
	</div>

	<div class="form-group">
		<label>Placed Company</label>
		<input type="text" name="company" placeholder="Placed Company" required>
	</div>

	<div class="form-group">
		<input type="submit" class="btn btn-primary" name="submit" value="submit">
	</div>


</form>


</body>
</html>