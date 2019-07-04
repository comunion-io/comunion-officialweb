<?php
// Set the header response to JSON
header('Content-type: application/json');

// Do not show php error
ini_set('display_errors','Off');

$response = array();

/*
 *Handle Message From
 */
// check email into post data
if (isset($_POST['submit_message'])) {
    $email = trim($_POST['email']);
    $name = trim($_POST['name']);
    $product = trim($_POST['product']);
    $message = trim($_POST['message']);
    
    
	$email = filter_var(@$_POST['email'], FILTER_SANITIZE_EMAIL );
	
	$name = htmlentities($name);
	$product = htmlentities($product);
	$message = htmlentities($message);

	// Validate data first
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($email) > 50 ) {
		http_response_code(403);
        $response['error']['email'] = "A valid email is required";
    }
    if (empty($name) ) {
		http_response_code(403);
        $response['error']['name'] = 'Name is required ';
    }
    if (empty($message)) {
		http_response_code(403);
        $response['error']['message'] = 'Empty message is not allowed';
    }

	// Process to emailing if forms are correct
    if (!isset($response['error']) || $response['error'] === '') {       

        
		/* in this sample code, messages will be stored in a text file */
//        PROCESS TO STORE MESSAGE GOES HERE
        
        $content = "Name: " . $name . " \r\nEmail: " . $email .  " \r\nMessage: " . $message;
        $content = str_replace(array('<','>'),array('&lt;','&gt;'),$content);
        
        // Set a 500 (internal server error) response code.
        http_response_code(200);
        $response['success'] = 'Thank You! Your message has been sent';
        // Write message into a file as a backup
        file_put_contents("message.txt", $content . "\r\n---------\r\n", FILE_APPEND | LOCK_EX);
                 
    } 
	else {
        // Set a 403 (error) forbidden response code due missing data to error.
       	http_response_code(403);
		//$response['error'] = '<ul>' . $response['error'] . '</ul>';
    }


    $response['email'] = $email;
    $response['form'] = 'submit_message';
    echo json_encode($response);
}

// check email into post data
if (isset($_POST['submit_email'])) {
//    $email = $_POST['email'];  
    $email = filter_var(@$_POST['email'], FILTER_SANITIZE_EMAIL );
    $name = trim($_POST['name']);
	$name = htmlentities($name);
//    Form validation handles by the server here if required

    if (!filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($email) > 50 ) {
        $response['error']['email'] = "A valid email is required";
    }

    if (!isset($response['error']) || $response['error'] === '') {
//        PROCESS TO STORE EMAIL GOES HERE
		$email = str_replace(array('<','>'),array('&lt;','&gt;'),$email);
        
        $save_text = true;
        if ($save_text){
            // Set a 200 (okay) response code.
            http_response_code(200);
            $response['success'] = "Thank You! You will be notified.";
            // As a backup, save email list to a file
            file_put_contents("email.txt", $email . " \r\n", FILE_APPEND | LOCK_EX);
        }
        

    }
    $response['email'] = $email;
    $response['form'] = 'submit_email';
    echo json_encode($response);    
} 

