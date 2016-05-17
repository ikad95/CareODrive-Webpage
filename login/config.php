<?php

require_once 'messages.php';

//site specific configuration declartion
define( 'BASE_PATH', 'http://localhost/google2/');
define( 'DB_HOST', 'localhost' );
define( 'DB_USERNAME', 'root');
define( 'DB_PASSWORD', '');
define( 'DB_NAME', 'user_login');

//Google App Details
define('GOOGLE_APP_NAME', 'CareOdrive');
define('GOOGLE_OAUTH_CLIENT_ID', '983995776026-o074kfhdt0q52nva87khk0gevrk6jbnl.apps.googleusercontent.com');
define('GOOGLE_OAUTH_CLIENT_SECRET', 'sQ3Uksq_hk8YNsPQs56IFRs8');
define('GOOGLE_OAUTH_REDIRECT_URI', 'https://localhost/COD/login');
define("GOOGLE_SITE_NAME", 'YOUR SITE URL'); 

function __autoload($class)
{
	$parts = explode('_', $class);
	$path = implode(DIRECTORY_SEPARATOR,$parts);
	require_once $path . '.php';
}
