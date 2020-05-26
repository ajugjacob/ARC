<?php /* Template Name: Form Render */ ?>

<?php

	if(isset($_POST['submit'])){
		$first_name = sanitize_text_field($_POST['first_name']);
		$second_name = sanitize_text_field($_POST['middle_name']);
		$last_name = sanitize_text_field($_POST['last_name']);
		$gender = sanitize_text_field($_POST['gender']);
		$email = sanitize_email($_POST['email']);
		$phone_personal = sanitize_text_field($_POST['phone_personal']);
		$phone_parent = sanitize_text_field($_POST['phone_parent']);
		$address = sanitize_text_field($_POST['address']);
		$department = sanitize_text_field($_POST['department']);
		$batch = sanitize_text_field($_POST['batch']);
		$uni_number = sanitize_text_field($_POST['uni_number']);
		$company = sanitize_text_field($_POST['company']);


		$to = get_option('admin_email');
		$subject = 'Type Subject HERE!!';

		$body = "
			First Name: $first_name \r\n
			Middle Name: $middle_name \r\n
			Last Name: $last_name \r\n
			Gender: $gender \r\n
			Email: $email \r\n
			Personal phone: $phone_personal \r\n
			Parent Phone: $phone_parent \r\n
			Address: $address \r\n
			Department: $department \r\n
			Batch: $batch \r\n
			University Number: $uni_number \r\n
			Company: $company \r\n"; 

		$headers = array('Content-Type: text/html; charset=UTF-8',"From: $email");

		wp_mail( $to, $subject, $body, $headers ); //send email function



	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	All values are available in those variable, can be accessed by
	&lt;?= variable name ?&gt;

	Form Example <?= $first_name ?>

</body>
</html>