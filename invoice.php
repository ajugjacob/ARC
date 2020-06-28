<?php /* Template Name: Invoice */ ?>
<?php

if(isset($_POST['submit'])){
	$first_name = sanitize_text_field($_POST['first_name']);
	$middle_name = sanitize_text_field($_POST['middle_name']);
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
	$higher_studies = sanitize_text_field($_POST['higher_studies']);

	global $wpdb;

	$invoice_table = $wpdb->prefix . "invoices";
	$w = $wpdb->insert($invoice_table, array(
	        'first_name' => $first_name,
	        'middle_name' => $middle_name,
            'last_name' => $last_name,
            'gender' => $gender,
            'email' => $email,
            'phone_personal' => $phone_personal,
            'phone_parent' => $phone_parent,
            'address' => $address,
            'department' => $department,
            'batch' => $batch,
            'uni_number' => $uni_number,
            'company' => $company,
            'higher_studies' => $higher_studies
    ));

	$id = $wpdb->insert_id;


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
			Higher Studies: $higher_studies \r\n
			Company: $company \r\n";

	$headers = array('Content-Type: text/html; charset=UTF-8',"From: $email");

	wp_mail( $to, $subject, $body, $headers ); //send email function



}
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Reciept</title>
    
    <style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }
    
    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }
    
    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }
    
    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }
    
    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }
    
    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }
    
    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }
    
    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }
    
    .invoice-box table tr.item.last td {
        border-bottom: none;
    }
    .invoice-box table tr.top td table tr.title td #arc-logo {
            float: right;
        }
    .invoice-box table tr.signature td{
        padding-top: 250px;
    }
    
  /*  .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }*/
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }
        
        .invoice-box table tr.information table td #sign{
            width: 100%;
            display: block;
            text-align: center;
        }
    }
    
    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }
    
    .rtl table {
        text-align: right;
    }
    
    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
    </style>
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr class="title">
                            <td>
                                <img src="<?= get_asset('img/cec_logo.png') ?>" height="90 px">
                            </td>
                            <td>
                                <span style="padding-top: 50px">Reciept No. <?= $id ?></span>
                            </td>
                            <td>
                                <div id="arc-logo">
                                    <img src="<?= get_asset('img/alumni final.png') ?>" height="100 px">
                                </div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                College of Engineering Chengannur<br>
                                Chengannur P.O.<br>
                                Alapuzha District<br>
                                Kerala, PIN 689121
                            </td>

                            <td>
                                
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="heading">
                <td>
                    Student Details
                </td>
                
                <td>
                    
                </td>
            </tr>
            <tr class="details">
                <td>
                    Name
                </td>
                
                <td>
                    <?= $first_name ?> <?= $middle_name ?> <?= $last_name ?>
                </td>
            </tr>
            <tr class="details">
                <td>
                    Branch
                </td>
                
                <td>
	                <?= $department ?>
                </td>
            </tr>
            <tr class="details">
                <td>
                    Batch
                </td>
                
                <td>
                    <?= $batch ?>
                </td>
            </tr>
            <tr class="details">
                <td>
                    Year
                </td>
                
                <td>
                    <?= date('Y') ?>
                </td>
            </tr>
            <tr class="details">
                <td>
                    Mail ID
                </td>
                
                <td>
                    <?= $email ?>
                </td>
            </tr>
            <tr class="details" style="border-bottom: 2px solid #eee">
                <td>
                    Contact No.
                </td>
                
                <td>
                    <?= $phone_personal ?>
                </td>
            </tr>
            
            
            <tr class="signature">
                <td></td>
                <td id="sign">
                    <span style="border-top: 2px solid #808080; padding-top: 7px">ARC Advisor</span>
                </td>                
            </tr>
        </table>
    </div>
</body>
</html>