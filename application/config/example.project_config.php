<?php
// fill this section with your facebook and twitter details
$config ['facebook'] ['api_id'] = '**********';
$config ['facebook'] ['app_secret'] = '**********';
$config ['facebook'] ['redirect_url'] = base_url ();
$config ['facebook'] ['permissions'] = array (
		'email',
		'user_location',
		'user_birthday' 
);

$config ['twitter'] ['settings'] = array (
		'oauth_access_token' => "*******",
		'oauth_access_token_secret' => "********",
		'consumer_key' => "*********",
		'consumer_secret' => "**********" 
);