<?php
define ('DB_NAME', 'comments') ; 
define ('DB_USER', 'root' ) ;
define ('DB_PASSWORD', '' ) ;
define ('DB_HOST', 'localhost' ) ;

$link = mysql_connect (DB_HOST, DB_USER, DB_PASSWORD);
if (!$link)  {
    die ('could not connect : ' . mysql_error ()) ; 
}
$database_selected = mysql_select_db ('DB_NAME', $link) ;
if(!'database_selected') {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully database'; 
$articleid = $_POST["articleid"];
$name = $_POST ["name"];
$message = $_POST ["comment"];
$email = $_POST ["email"];


$articleid = $_POST['articleid'];
  if( ! is_numeric($articleid) )
    die('invalid article id');

$query = " INSERT INTO `commentform` (`ID`, `name`, `email`, `comment`, `articleid`) 
VALUES (NULL, '$name', '$email', '$message', '$articleid');";

mysql_query($query);
$success= mysql_query("INSERT INTO `commentform` (`ID`, `name`, `email`, `comment`, `articleid`) 
VALUES (NULL, '$name', '$email', '$message', '$articleid';");;
if (!$success) {
die('Could not Insert: ' . mysql_error());
}

echo "$name","<br>", "$message";
if (!mysql_query($sql)) {
    die('Error: ' . mysql_error());

}
 
exit;
mysql_close()
?>

