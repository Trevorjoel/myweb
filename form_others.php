<?php

$first_name = $_POST ['first_name'];
$last_name = $_POST ['last_name'];
$email = $_POST ['email'];
$publish_area = $_POST ['publish_area'];
$title = $_POST ['title'];
$article_body = $_POST ['article_body'];
$links = $_POST ['links'];
$extra = $_POST ['extra'];


$first_name = filter_input(INPUT_POST,'first_name' ,FILTER_SANITIZE_STRING);
$last_name = filter_input(INPUT_POST,'last_name' ,FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST,'email' ,FILTER_SANITIZE_EMAIL);
$publish_area = filter_input(INPUT_POST,'publish_area' ,FILTER_SANITIZE_STRING);
$title = filter_input(INPUT_POST,'title' ,FILTER_SANITIZE_STRING);
$article_body = filter_input(INPUT_POST,'article_body' ,FILTER_SANITIZE_STRING);
$links = filter_input (INPUT_POST,'links', FILTER_SANITIZE_URL);
$extra = filter_input(INPUT_POST,'extra' ,FILTER_SANITIZE_STRING);

$to = 'trevoofnorthcliffe@gmail.com';

if (!empty($_FILES['files']['name'][0])) {
	
	$files = $_FILES ['files'];
	$failed = array();
	
	$allowed = array('jpg', 'jpeg','png');
	
	foreach ($files ['name'] as $position => $file_name){
		
		$file_tmp = $files ['tmp_name'][$position];
		$file_size = $files ['size'][$position];
		$file_error = $files ['error'][$position];
		
		$file_ext = explode('.', $file_name);
		$file_ext = strtolower(end($file_ext));
		
		if (in_array($file_ext, $allowed)) {
			
			if ($file_error === 0){
				
				if ($file_size <= 2097152){
					
					$file_name_new = uniqid('', true) . '.' .$file_ext;
					$file_destination = 'uploads/' . $file_name_new;
					
					if (move_uploaded_file($file_tmp, $file_destination)) {
						$uploaded[$position] = $file_destination;					
						}else {
						$failed [$position] = "[{$file_name}] failed to upload.";
						}
							}else {
							$failed [$position] = "[{$file_name}] is too damn large.";
						} 
				
					}else {
					$failed [$position] = "[{$file_name}] errored with code{$file_error}.";
				}
			}else {
			$failed[$position] = "[{$file_name}] file extension '{$file_ext} is not permitted";
			}
		}
		if (!empty($uploaded)){
			print_r($uploaded);	
		}
		
		if (!empty($failed)) {
			print_r($failed);
		}
	}
$msg = ("<br>" ."$first_name" . "<br>" . " $last_name" .  "<br>" . " $email" . "<br>" . "  $publish_area " ."<br>" . " $title " ."<br>" . " $article_body" ."<br>" . 
		" $links" ."<br>" . " $extra");
	


//mail($to, $title, $msg);

echo  $msg


?>