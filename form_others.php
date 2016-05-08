<html>
<!-- Needs: To gather and display all errors before exit
            Send email to user
            Display the filenames and or thumbnails of uploaded and failed ext files
            
            -->
<head>

<title>Message</title>

<link rel="stylesheet" href="main.css">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<?php include 'header.php'; ?>
</head>


<body>
	<br>
	<br>
	<br>
	<br>
	<article class="articleform">
<?php

$first_name = $_POST ['first_name'];
$last_name = $_POST ['last_name'];
$email = $_POST ['email'];
$publish_area = $_POST ['publish_area'];
$title = $_POST ['title'];
$article_body = $_POST ['article_body'];
$links = $_POST ['links'];
$extra = $_POST ['extra'];

$msg = ("<br>" . "$first_name" . "<br>" . " $last_name" . "<br>" . " $email" . "<br>" . "  $publish_area " . "<br>" . " $title " . "<br>" . " $article_body" . "<br>" . " $links" . "<br>" . " $extra");

$first_name = filter_input ( INPUT_POST, 'first_name', FILTER_SANITIZE_STRING );
$last_name = filter_input ( INPUT_POST, 'last_name', FILTER_SANITIZE_STRING );
$email = filter_input ( INPUT_POST, 'email', FILTER_SANITIZE_EMAIL );
$publish_area = filter_input ( INPUT_POST, 'publish_area', FILTER_SANITIZE_STRING );
$title = filter_input ( INPUT_POST, 'title', FILTER_SANITIZE_STRING );
$article_body = filter_input ( INPUT_POST, 'article_body', FILTER_SANITIZE_STRING );
$links = filter_input ( INPUT_POST, 'links', FILTER_SANITIZE_URL );
$extra = filter_input ( INPUT_POST, 'extra', FILTER_SANITIZE_STRING );

$to = 'trevoofnorthcliffe@gmail.com';

if (! empty ( $_FILES ['files'] ['name'] [0] )) {
	
	$files = $_FILES ['files'];
	$failed = array ();
	
	$allowed = array (
			'jpg',
			'jpeg',
			'png' 
	);
	
	foreach ( $files ['name'] as $position => $file_name ) {
		
		$file_tmp = $files ['tmp_name'] [$position];
		$file_size = $files ['size'] [$position];
		$file_error = $files ['error'] [$position];
		
		$file_ext = explode ( '.', $file_name );
		$file_ext = strtolower ( end ( $file_ext ) );
		
		if (in_array ( $file_ext, $allowed )) {
			
			if ($file_error === 0) {
				
				if ($file_size <= 2097152) {
					
					$file_name_new = uniqid ( '', true ) . $last_name . '.' . $file_ext;
					
					$file_destination = 'uploads/' . $file_name_new;
					
					if (move_uploaded_file ( $file_tmp, $file_destination )) {
						$uploaded [$position] = $file_destination;
					} else {
						$failed [$position] = "[{$file_name}] failed to upload.";
					}
				} else {
					$failed [$position] = "[{$file_name}] is too damn large.";
				}
			} else {
				$failed [$position] = "[{$file_name}] errored with code{$file_error}.";
			}
			// Needs code to indicate if more than one file ext fails to load
		} else {
			
			/*
			 * echo "<p>$file_name file extension {$file_ext}, is not permitted! <br>Please press the back button and ensure you have .jpg .jpeg .png files only.<br>Your text will
			 * still be in the text boxes.</p>";
			 */
			
			echo "<img src='images/warning.png' WIDTH=100 HEIGHT=100 ></a><p style='color:red'>$file_name<br> file extention {$file_ext}, is not permitted!</p><p><br>Ensure you have <b> .jpg .jpeg .png </b>files only
					Please press the back button.<br>Your text will still be in the text boxes.</p>";
			
			echo ('<br>' . '<a style="cursor:pointer" onclick="history.go(-1);return true;" rel=nofollow”> <img src="images/back_button_orange_1358241199.png"></a>');
			exit ();
		}
	}
	
	if (! filter_var ( $email, FILTER_VALIDATE_EMAIL ) === false) {
		mail ( $to, $title, $msg );
		echo ("<p>" . "Hello,<br> " . "$first_name " . "$last_name" . "<br>" . " Your article was a
				success!" . "<br>" . "Here is a copy of your message:" . "<b>$msg</b>");
	} 

	else {
		
		echo '<a href=><img src="images/warning.png" WIDTH=100 HEIGHT=100 ></a>' . "<p>" . "Hello,<br>" . " $first_name " . "$last_name<br>" . "<b>$email</b>" . " is not a valid email address. <br>
			Please press the back button and enter a valid email address.
			<br>Your text will still be in the text boxes.</p>'" . "</p>" . "<a style='cursor:pointer' onclick='history.go(-1);return true;' rel=nofollow'> 
			 		<img src='images/back_button_orange_1358241199.png'></a>');";
		exit ();
	}
	if (! empty ( $uploaded )) {
		print ("Your images have been uploaded") ;
	}
	
	if (! empty ( $failed )) {
		print_r ( $failed );
	}
}

// echo ("$msg");
?>
<div class="back"></div>
	</article>
</body>


</html>