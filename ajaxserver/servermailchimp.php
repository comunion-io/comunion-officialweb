<?php
$response = array();
/*
 IMPORTANT : 
  - Change mailcimp API Key and List ID by your own
  - Change message from user email recipient by your own
*/
/*
 *Handle Email Subscription Form, Use GET instead of POST since Internet Explorer makes restriction on POST request
 */
// check email into post data
if (isset($_POST['submit_email'])) {
//    $email = $_POST['email'];  
    $email = filter_var(@$_POST['email'], FILTER_SANITIZE_EMAIL );   
    if (!isset($response['error']) || $response['error'] === '') {

//      Store email address
//        $response = $this->storeAddress($email);
        $response = storeAddress($email);
    }
    echo json_encode($response);    
} 

/*
 * store address to mailchimp mailing list
 * IMPORTANT : 
 - Replace 'YOUR_APIKEY_HERE' by your api key from your mailchimp
     Get one here http://admin.mailchimp.com/account/api/
 - Replace 'YOUR_LISTID_HERE' by your list's unique ID
    Create a list here http://admin.mailchimp.com/lists/
    Then Click the "settings" link for the list - the Unique Id is at the bottom of that page. 
 */
function storeAddress($user_email){
    
    include('./mailchimp/MailChimp.php');

	// IMPORTANT : grab an API Key from http://admin.mailchimp.com/account/api/ and replace YOUR_APIKEY_HERE by yours
    $MailChimp = new MailChimp('YOUR_APIKEY_HERE');
	
	//  IMPORTANT : grab your List's Unique Id by going to http://admin.mailchimp.com/lists/ and replace YOUR_LISTID_HERE by yours
	// Click the "settings" link for the list - the Unique Id is at the bottom of that page. 
	$list_id = "YOUR_LISTID_HERE";

    $m_response = array();
    
	// Validation
	if(!$user_email){ 
        $m_response['error'] = "No email address provided";
        return $m_response; 
    } 

	if(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*$/i", $user_email)) {
        $m_response['error'] = "Email address is invalid";
        return $m_response; 
	}

    // send mailchimp
    $result = $MailChimp->post("lists/$list_id/members", [
				'email_address' => $user_email,
				'status'        => 'subscribed',
			]);
            // verify here result content
    $m_response['success'] = 'Thank you for your registration, you will be notified by email';
    $m_response['result'] = $result;
    /* if( $MailChimp->post("lists/$list_id/members", [
				'email_address' => $user_email,
				'status'        => 'subscribed',
			]) ) {
        $m_response['success'] = 'Thank you for your registration, you will be notified by email';
    } else {
		// An error ocurred, return error message
        $m_response['error'] = 'Error: Something went wrong' . $api->errorMessage;
		//return 'Error: ' . $api->errorMessage;
	} */
    $m_response['email'] = $user_email;
    $m_response['form'] = 'submit_email';
	return $m_response;
}



/*
 *Handle Message From
 */
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
        $name = str_replace(array('<','>'),array('&lt;','&gt;'),$name);
        $message = str_replace(array('<','>'),array('&lt;','&gt;'),$message);
        
        // -- BELOW : EXAMPLE SEND YOU AN EMAIL CONTAINING THE MESSAGE (comment to disable it/ uncomment it to enable it)
        // Set the recipient email address.
        // IMPORTANT - FIXME: Update this to your desired email address (relative to your server domaine).
        $recipient = "your@email.com";

        // Set the email subject.
        $subject = "Need support message From ".$name;

        // Build the email content.
        $email_content = $message."\n \n";       
        $email_content .= "Sincerely,";
        $email_content .= "From: $name\n\n";
        $email_content .= "Email: $email\n\n";

        // Build the email headers.
		$email_headers = "MIME-Version: 1.0" . "\r\n"; 
		$email_headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n"; 
		$email_headers .= "From: $name <$email>" . "\r\n";
		$email_headers .= "Reply-To: <$email>";
        

        // Send the email.
        if ( mail($recipient, $subject, $email_content, $email_headers) ) {
            // Set a 200 (okay) response code.
           	http_response_code(200);
            $response['success'] = 'Thank You! Your message has been sent';
            
        } else {
            // Set a 500 (internal server error) response code.
           	http_response_code(500);
            $response['error'] = 'Oops! Something went wrong and we couldn\'t send your message';
            $content = 'Message delivery error - can not send message'. "\r\n" . $content;
            // Uncomment below to Write message into a file as a backup
            //file_put_contents("message.txt", $content . "\r\n---------\r\n", FILE_APPEND | LOCK_EX);
        }
                 
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
