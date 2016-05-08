
<head>
<title>List comments</title>


</head>
<body>
	<hr>
<?php
define ( 'DB_NAME', 'comments' );
define ( 'DB_USER', 'root' );
define ( 'DB_PASSWORD', '' );
define ( 'DB_HOST', 'localhost' );

$link = mysql_connect ( DB_HOST, DB_USER, DB_PASSWORD );
if (! $link) {
	die ( 'could not connect : ' . mysql_error () );
}
// echo 'Connected successfully to the database';

mysql_connect ( DB_HOST, DB_USER, DB_PASSWORD );

$database_selected = mysql_select_db ( 'comments', $link );
if (! 'database_selected') {
	die ( 'Could not connect: ' . mysql_error () );
}
// echo 'Connected successfully database';

$link = new mysqli ( DB_HOST, DB_USER, DB_PASSWORD );

if ($link->connect_error)
	die ( $link->connect_error );
?>
   
	 <h2 class="comments-wrapper-heading">Comments:</h2>
	 <?php
		
		$articleid = $_GET ["id"];
		
		if (! is_numeric ( $articleid ))
			die ( 'invalid article id' );
		
		$query = "SELECT * FROM `comments` . `commentform` WHERE `articleid` = $articleid";
		$result = $link->query ( $query );
		if (! $result)
			die ( "Database access failed: " . $link->error );
		
		$comments = mysql_query ( $query );
		// print_r($result);
		while ( $rows = $result->fetch_assoc () ) {
			$id = $rows ['ID'];
			$name = $rows ['name'];
			$comment = $rows ['comment'];
			
			echo " <div id='comment_reply' class='comment_reply'>
   	   	 <b style='font-size : 110%;'>$name</b><br/>   	   	 
   	   	 <br> <div class= 'comment_container' <br/>$comment
   	   	 </div>
   	   	 </div>";
		}
		
		mysql_close ();
		?>

</body>
<html></html>