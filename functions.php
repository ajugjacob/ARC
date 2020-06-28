<?php 

// add scripts and styles for user
function arc_theme_scripts(){
    wp_enqueue_style( 'arc-style', get_template_directory_uri() . '/assets/css/style.css', array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri(). '/assets/lib/bootstrap/css/bootstrap.min.css' , array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'fontawesome-css', get_template_directory_uri(). '/assets/lib/font-awesome/css/font-awesome.min.css' , array(), wp_get_theme()->get( 'Version' ) );
    // wp_enqueue_style( 'animate-css', get_template_directory_uri(). '/assets/lib/animate/animate.min.css' , array(), wp_get_theme()->get( 'Version' ) );
    
    wp_enqueue_script( 'jquery-script', get_template_directory_uri(). '/assets/lib/jquery/jquery.min.js' , array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_script( 'jquery-migrate-script', get_template_directory_uri(). '/assets/lib/jquery/jquery-migrate.min.js' , array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_script( 'bootstrap-script', get_template_directory_uri(). '/assets/lib/bootstrap/js/bootstrap.bundle.min.js' , array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_script( 'wow-script', get_template_directory_uri(). '/assets/lib/wow/wow.min.js' , array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_script( 'arc-script', get_template_directory_uri(). '/assets/js/main.js' , array(), wp_get_theme()->get( 'Version' ) );
}

add_action( 'wp_enqueue_scripts', 'arc_theme_scripts' );

// add scripts and styles for admin
function arc_admin_scripts(){
	wp_enqueue_style( 'arc-datatables-style', get_template_directory_uri() . '/admin_pages/css/jquery.dataTables.min.css', array(), wp_get_theme()->get( 'Version' ) );

	wp_enqueue_script( 'jquery-script', get_template_directory_uri(). '/assets/lib/jquery/jquery.min.js' , array(), wp_get_theme()->get( 'Version' ) );
	wp_enqueue_script( 'jquery-migrate-script', get_template_directory_uri(). '/assets/lib/jquery/jquery-migrate.min.js' , array(), wp_get_theme()->get( 'Version' ) );
	wp_enqueue_script( 'arc-datatables-script', get_template_directory_uri(). '/admin_pages/js/jquery.dataTables.min.js' , array(), wp_get_theme()->get( 'Version' ) );
}

add_action( 'admin_enqueue_scripts', 'arc_admin_scripts' );


// this function run when theme is installed for the first time
function run_once_code() {

	if ( get_option( 'page_function_run' ) != 'completed' ) {

		$form_page = array(
			'post_type'    => 'page',
			'post_title'    => 'Form',
			'post_content'  => '',
			'post_status'   => 'publish',
			'post_author'   => 1
		);

		$invoice = array(
			'post_type'    => 'page',
			'post_title'    => 'Invoice',
			'post_content'  => '',
			'post_status'   => 'publish',
			'post_author'   => 1
		);

		$form_page_id =  wp_insert_post( $form_page );
		$form_render_id =  wp_insert_post( $invoice );

		update_post_meta($form_page_id, '_wp_page_template', 'form.php');
		update_post_meta($form_render_id, '_wp_page_template', 'admin_invoice.php');

		update_option( 'page_function_run', 'completed' );

		global $wp_rewrite;
		$wp_rewrite->set_permalink_structure( '/%postname%/' );

		global $wpdb;

		$sql = "CREATE TABLE `{$wpdb->base_prefix}invoices` (
				`id` INT NOT NULL AUTO_INCREMENT,
				`first_name` VARCHAR(100),
				`middle_name` VARCHAR(100),
				`last_name` VARCHAR(100),
				`gender` VARCHAR(10),
				`email` VARCHAR(100),
				`phone_personal` INT,
				`phone_parent` INT,
				`address` TEXT,
				`department` VARCHAR(50),
				`batch` VARCHAR(10),
				`uni_number` INT,
				`company` VARCHAR(100),
				`higher_studies` varchar(255),
				PRIMARY KEY (`id`)
			);";

		require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
		dbDelta($sql);
	}
}

/*
 * if you want to reset the settings and rerun the run_once_code() function
 * replace reset_settings() function with run_once_code() in admin_init()
 * and switch the theme and activate this theme again
 * then replace reset_settings with run_once_code and switch this theme and active this theme again
 */
function reset_settings(){
	update_option( 'page_function_run', 'not completed' );
}

add_action( 'admin_init', 'run_once_code' );

// get asset function
function get_asset($url){
    return get_template_directory_uri() . '/assets/' . $url;
}

// add admin page for managing invoices
function add_invoice_page() {
	add_menu_page(
		__( 'Invoice', 'invoice' ),
		__( 'Invoice', 'invoice' ),
		'manage_options',
		'invoice-page',
		'invoice_page',
		'dashicons-text-page',
		4
	);
}

add_action( 'admin_menu', 'add_invoice_page' );


function invoice_page() {
	include_once 'admin_pages/admin_invoice.php';
}
