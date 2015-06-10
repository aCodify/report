<?php  
// SET CONFIG URL
$set_http = ( ! empty($_SERVER['HTTP_X_FORWARDED_PROTO']) ) ? $_SERVER['HTTP_X_FORWARDED_PROTO'] :'http' ;
$set_http = $set_http.'://';

define('ABSPATH', rtrim(str_replace('\\', '/', $_SERVER['DOCUMENT_ROOT']) . '/', '/').'/');
define('ABSURL', $set_http . $_SERVER['HTTP_HOST'].'/' );

// SET CONFIG DATABASE
define('DATABASE_HOSTNAME', '');
define('DATABASE_USERNAME', '');
define('DATABASE_PASSWORD', '');
define('DATABASE_NAME', '');


define('THSMS_USERNAME', '');
define('THSMS_PASSWORD', '');


