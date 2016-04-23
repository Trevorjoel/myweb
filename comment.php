
<html>
  <head>
    <title>Comments</title>
    <script type="text/javascript" src="jquery-1.12.2.js"></script>
<script type="text/javascript"> function get(){
//	$.post ('insert_to.php')
	
//	$('#comment_reply') .html (output) .show ();
//}
</script>
    <?  
  //  if ($_POST){
  // 	$errors = array();
   // 	if (empty($_POST['name'])){
    	//	$errors = ['Name field can not be empty!'];
   // 	}
   // }
  //  include("insert_to.php");
    ?>
    
  </head>
  <body>
  
    <div class="comment-form">
      
      <form id="comment_form" action="insert_to.php" method="POST" autocomplete='on'>
        <div class="commentform-element">
          <label class="hide" for="name">Full Name</label><br>
          <input class="input-fields" id="name" name="name" type="text" placeholder="What's up?" value=""required='required'/>
        </div>
        <div class="commentform-element">
          <label class="hide" for="author">Email</label><br>
          <input class="input-fields" id="email" name="email" type="text" placeholder="Email" value=""required='required'/>
        </div>
        <div class="commentform-element">
          <label class="hide" for="comment">Message</label><br>
          <textarea id="comment" class="input-fields" placeholder="Comment here!" name="comment" cols="40" rows="4"required='required'></textarea>
        
        </div>
        <input name="submit" class="form-submit-button"  type="submit" id="submit" value="Submit" onclick="get()">
      <input type="hidden" name="articleid" id="articleid" value="<?php echo $_GET['id']; ?>"/>  
             </form>

    </div>                                                                                 
      <?php                
                  if(isset($_GET['id'])){                // This will show if the url id is ok
    
    echo "id is set to number:"; echo $_GET["id"];
} 

?>


  </body>
</html>
