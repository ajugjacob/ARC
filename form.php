<?php /* Template Name: Form Template */ ?>
<?php
/*
	1) Create two pages -- Form and Form Render
	2) Set template name of form page Form Template and form render page to Form Render
	2) replace form action of this page with permalink of form render page

*/
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="./assets/css/style.css" type="text/css">
	<style>
						input::-webkit-outer-spin-button,
						input::-webkit-inner-spin-button 
						{
	  						-webkit-appearance: none;
	  						margin: 0;
						}
						input[type=number] 
						{
						    -moz-appearance: textfield;
						    text-transform: uppercase;
						}
						.container .form-group label{
							font-size: 1.2em;
							font-weight: 600;
							color: 	#212529;
						}
						.container .form-group #submit-button{
							background-color: #f82249;
							border: solid 1px #f82249;
						}						
	</style>
</head>
<body>

<!-- put action = form render url!! -->
<div class="container">
<form style="margin: 50px auto; width: 100%;" method="POST" action="/invoice">
	
	<div class="form-group">
		<label>Name</label><br>
		<input type="text" name="first_name" id="first_name" class="col-xl-3 col-lg-4 col-md-6" style="padding: 12px;" placeholder="First Name" required>
		<input type="text" name="middle_name" id="middle_name" class="col-xl-3 col-lg-4 col-md-6" style="padding: 12px;" placeholder="Middle Name">
		<input type="text" name="last_name" id="last_name" class="col-xl-3 col-lg-4 col-md-6" style="padding: 12px;" placeholder="Last Name" required>
	</div>

	<div class="form-group">
		<label>Gender</label><br>
		<input type="radio" name="gender" value="male"> <span>Male</span>
		<input type="radio" name="gender" value="female"> <span>Female</span><br>
	</div>

	<div class="form-group">
		<label>Mail ID</label><br>
		<input type="email" name="email" class="col-xl-3 col-lg-4 col-md-6" style="padding: 12px;" placeholder="Email" required>
	</div>

	<div class="form-group">
		<label>Phone</label><br>
		<input type="number" name="phone_personal" class="col-xl-3 col-lg-4 col-md-6" style="padding: 12px;" placeholder="Personal No." required>
		<input type="number" name="phone_parent" class="col-xl-3 col-lg-4 col-md-6" style="padding: 12px;" placeholder="Parents No." required>
	<div class="form-group">
		<label style="margin-top: 20px;">Address</label><br>
		<textarea name="address" placeholder="Type your address here" class="col-xl-10 col-lg-4 col-md-6" style="padding: 12px;" required></textarea>
	</div>

	<div class="form-group">
		<label for="department">Department</label><br>
		<!-- <input name="Department" class="col-xl-3 col-lg-4 col-md-6" style="padding: 12px;" placeholder="department" required> -->
		  <select id="department" name="department" class="col-xl-3 col-lg-4 col-md-6" style="padding: 12px;" placeholder="Department">
		    <option value="EC">Electronics Communication</option>
		    <option value="CS">Computer Science</option>
		    <option value="EE">Electrical & Electronics</option>
		    <option value="EI">Electronics & Instrumentation</option>
		  </select>
		<!-- <input type="text" name="batch" class="col-xl-3 col-lg-4 col-md-6" style="padding: 12px;" placeholder="Enter your Batch (A,B,C,D)" required> -->
		<!-- <input name="Department" class="col-xl-3 col-lg-4 col-md-6" style="padding: 12px;" placeholder="department" required> -->
		  <select id="batch" name="batch" class="col-xl-3 col-lg-4 col-md-6" style="padding: 12px;" placeholder="Batch">
		    <option value="A">A</option>
		    <option value="B">B</option>
		    <option value="C">C</option>
		    <option value="D">D</option>
		    <option value="E">E</option>
		    <option value="F">F</option>
		    <option value="G">G</option>
		  </select>
	</div>

	<div class="form-group">
		<label>University Number</label><br>
		<input type="number" name="uni_number" class="col-xl-3 col-lg-4 col-md-6" style="padding: 12px;" placeholder="University Number" required>
	</div>

	<div class="form-group">
		<label>Placed Company</label><br>
		<input type="text" name="company" class="col-xl-8 col-lg-4 col-md-6" style="padding: 12px;" placeholder="Placed Company" required>
	</div>

	<div class="form-group">
		<label>Higher Studies</label><br>
		<input type="text" name="higher_studies" class="col-xl-8 col-lg-4 col-md-6" style="padding: 12px;" placeholder="Higher Studies" required>
	</div>
	
	<div class="form-group">
		<input type="submit" class="btn btn-primary" name="submit" id="submit-button" value="Submit">
	</div>

</form>
</div>
</body>
</html>