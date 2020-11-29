<?php
require "rb.php";
$activ = 'true';

// RedbeanPHP Settings
$host = 'host';
$dbname = 'name';
$name =  'name';
$password = 'pass';

if($activ == '44true'){
R::setup( 'mysql:host='.$host.';dbname='.$dbname.'',''.$name.'', ''.$password.'' ); 
} else{
R::setup( 'mysql:host=host_local;dbname=name_local','user_local', 'pass_local' ); 
}
if ( !R::testconnection() )
{
		exit ('Нет соединения с базой данных');
}

session_start();
echo '<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">';
echo " <style type='text/css'>body{font-family: 'Roboto Mono', monospace;}</style>";

?>
