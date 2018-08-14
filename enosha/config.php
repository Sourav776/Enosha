<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="enosha";
$webroot="D:/xampp/htdocs/enosha";
$weburl="http://127.0.0.1/enosha";
$upload_path="D:/xampp/enoshadata";
$platform="windows";
$smtp_server="smtp@127.0.0.1/enosha";
$mysqldump_path = "C:/wamp/bin/mysql/bin/mysqldump.exe"; 
/*
** Connect to the database
*/
 require_once "$webroot/lib/db_connect.php";


/*
** Load required modules
*/
 require_once "$webroot/lib/start.php";


 /*
 ** Setup the language
 */
 $language =  "$webroot/lang/en";
 require_once "$language/common.php";
 
 
 /*
 ** Setup e-mail notifications
 */

 $site_mail = "no-reply@mysite.com";
 
 /*
 ** Setup the rating of learning objects
 */

	$same_ip_rating = "no";  // yes or no
?>