<?php
define('DB_HOST','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','calender');

//Google api configuration
define('GOOGLE_CLIENT_ID','1004763261168-1fp8qonrjcef2br29pgnkjrh52iovepl.apps.googleusercontent.com');
define('GOOGLE_CLIENT_SECRET','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');
define('GOOGLE_OAUTH_SCOPE', 'https://www.googleapis.com/auth/calendar'); 
define('REDIRECT_URI', 'http://localhost/google_calender_add_event_php/google_calender_event_sync.php'); 
//Start Session
if(!session_id()) session_start();

//Google OAuth Url
$googleOauthURL = 'https://accounts.google.com/o/oauth2/auth?scope=' . urlencode(GOOGLE_OAUTH_SCOPE) . '&redirect_uri=' . REDIRECT_URI . '&response_type=code&client_id=' . GOOGLE_CLIENT_ID . '&access_type=online'; 
    
?>