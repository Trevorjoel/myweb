<html>
<head>
<title>Insert</title>
<link rel="stylesheet" href="main.css">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<script type="text/javascript" src="jquery-1.12.2.js"></script>
<script src='https://www.google.com/recaptcha/api.js'
	type="text/javascript"></script>
</head>
<body>
	<article class="articleform">
<?php
$email;
$comment;
$captcha;
if (isset ( $_POST ['name'] )) {
	$email = $_POST ['name'];
	if (isset ( $_POST ['email'] )) {
		$email = $_POST ['email'];
	}
	if (isset ( $_POST ['comment'] )) {
		$email = $_POST ['comment'];
	}
	if (isset ( $_POST ['g-recaptcha-response'] )) {
		$captcha = $_POST ['g-recaptcha-response'];
	}
	if (! $captcha) {
		echo "<h1>Please fill out the the captcha form.</h1><img class='tst3' src='images/windowlicker.jpg' 
			>";
		exit ();
	}
}
$ip = $_SERVER ['REMOTE_ADDR'];
$secretKey = "6Lcavx8TAAAAALEXJbyV5SCTHgFW7r8FxX58o7ti";
$response = file_get_contents ( "https://www.google.com/recaptcha/api/siteverify?secret=" . $secretKey . "&response=" . $captcha . "&remoteip=" . $ip );

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

$database_selected = mysql_select_db ( 'DB_NAME', $link );
if (! 'database_selected') {
	die ( 'Could not connect: ' . mysql_error () );
}
// echo 'Connected successfully database';
$name = $_POST ["name"];
$email = $_POST ["email"];
$comment = $_POST ["comment"];

$articleid = $_POST ["articleid"];
if (! is_numeric ( $articleid ))
	die ( 'invalid article id' );

$name = filter_input ( INPUT_POST, 'name', FILTER_SANITIZE_STRING );
$email = filter_input ( INPUT_POST, 'email', FILTER_SANITIZE_EMAIL );
$comment = filter_input ( INPUT_POST, 'comment', FILTER_SANITIZE_STRING );

if (! filter_var ( $email, FILTER_VALIDATE_EMAIL ) === false) {
	echo ("<p>" . "Hello," . "<br>" . "$name." . "<br>" . "$email" . "<br>" . " Your post was a great 
				success!" . "<br>" . "Here is a copy of your message:");
} 

else {
	
	echo "<p>". "<img class='' src='images/windowlicker.jpg' 
			><br>". "Hello," . " $name" . "<br>" . "<b>" . "$email" . "</b>" . " is not a valid email address. Please go back
		and enter a valid email address." . "</p>" ."<a style='cursor: pointer' onclick='history.go(-1);return true;'
				rel='nofollow'> <img src='images/back_button_orange_1358241199.png'
				alt=''></a>";
	exit ();
}

$sql = "INSERT INTO comments.commentform (`ID`, `name`, `email`, `comment`, `articleid`) VALUES (NULL,'$name','$email', '$comment' , `$articleid`);";
echo "<div id='comment_reply' class='comment_reply'>" . "<b style='font-size : 110%;'>" . "$name" . "</b>" . "<br><br>" . "$comment", "</div>";

$success = mysql_query ( "INSERT INTO comments.commentform  (`ID`, `name`, `email`, `comment`, `articleid`) 
		VALUES (NULL, '$name', '$email', '$comment', '$articleid');" );
if (! $success) {
	die ( 'Could not Insert: ' . mysql_error () );
}

?>

		<p>Press the back button and refresh browser to view your comment.</p>
		<div class="back">
			<a style="cursor: pointer" onclick="history.go(-1);return true;"
				rel="nofollow”"> <img src="images/back_button_orange_1358241199.png"
				alt=""></a>

		</div>
	</article>

</body>
</html>