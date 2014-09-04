<?php

$errors		= array();  	// array to hold validation errors
$data 		= array(); 		// array to pass back data

// validate the variables ======================================================
foreach ($_POST as $key => $value) {
	if ( empty($value) ) {
		$errors[''.$key.''] = ''.$key.' is required.';
	}
}

// return a response ===========================================================
if ( !empty($errors) ) {
	// if there are items in our errors array, return those errors
	$data['success'] = false;
	$data['errors']  = $errors;
} else {
	// if there are no errors, return a message
	$data['success'] = true;
	$data['message'] = 'Thanks, we\'ve successfully received your test answers and will get back to you shortly.';
}

echo json_encode($data);