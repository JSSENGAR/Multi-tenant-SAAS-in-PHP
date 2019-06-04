<?php
/**
 * These are the database login details
 * 
 * 
 * 
 * 
 * 
		Multi-tenant SAAS in PHP
		
		Step 1: Login to CPanel Create Subdomain by same document root path.
		
		Step 2: update Data Base Configuration file to call appropriate tenant DB as I updated in this example PHP File.				

 * 
 * 
 * 
 * 
 */  
 
 
    $uri = $_SERVER['REQUEST_URI']; 
    $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://"; 
    $url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];   
    $query = $_SERVER['QUERY_STRING'];    
    $url=parse_url($url);    
    $_SESSION['HostID']=$url['host'];    
    $strlen = strlen( $url['host'] );
    $id = "";
    for( $i = 0; $i <= $strlen; $i++ ) 
    {
        $char = substr( $url['host'], $i, 1 );
        if (stristr($char,'.'))  // Case insensitive
        break; //echo 'true';
        $id .= $char;
    }    
    if (strstr($id,'tenant1')) 
        {
            define("HOST", "localhost");     // The host you want to connect to.
			define("USER", "XXXXXXXXX");    // The database username. 
			define("PASSWORD", "XXXXXXXX");    // The database password. 
			define("DATABASE", "XXXXXXXX");    // The database name.
        }
    else if (strstr($id,'tenant2')) 
        {
            define("HOST", "localhost");     // The host you want to connect to.
			define("USER", "YYYYYYYYYYYY");    // The database username. 
			define("PASSWORD", "YYYYYYYYY");    // The database password. 
			define("DATABASE", "YYYYYYYYYY");    // The database name. 
        }
    else
        {
            define("HOST", "NRtenant");     // The host you want to connect to.
			define("USER", "ddddddddd");    // The database username. 
			define("PASSWORD", "dddddddddd");    // The database password. 
			define("DATABASE", "dddddddd");    // The database name. 
        }
    
 
define("CAN_REGISTER", "any");
define("DEFAULT_ROLE", "member");
 
define("SECURE", FALSE);    // FOR DEVELOPMENT ONLY!!!!
?>