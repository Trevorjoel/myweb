<html>
  <head>
    <title>Comments</title>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script type="text/javascript" src="jquery-1.12.2.js"></script>

    
  </head>
  <body>
  <!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-NLLBSX"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NLLBSX');</script>
<!-- End Google Tag Manager -->
    <div class="comment-form">

		<form id="comment_form" action="insert_to.php" method="POST"
			autocomplete='on'>
			<div class="commentform-element">
				<label class="hide" for="name">Full Name</label><br> <input
					class="input-fields" id="name" name="name" type="text"
					placeholder="What's up?" value="" required='required' />
			</div>
			<div class="commentform-element">
				<label class="hide" for="author">Email</label><br> <input
					class="input-fields" id="email" name="email" type="text"
					placeholder="Email" value="" required='required' />
			</div>
			<div class="commentform-element">
				<label class="hide" for="comment">Message</label><br>
				<textarea id="comment" class="input-fields"
					placeholder="Comment here!" name="comment" cols="40" rows="4"
					required='required'></textarea>
<div class="g-recaptcha" data-sitekey="6LdMTSETAAAAANCTNvekuc8iitEvmEMWk4pK0hm7"></div>
			</div>
			<input name="submit" class="form-submit-button" type="submit"
				id="submit" value="Submit" onclick="get()"> <input type="hidden"
				name="articleid" id="articleid"
				value="<?php echo $_GET['id']; ?>"/> 
		
		</form>

	</div>                                                                                 
      <?php                
                  if(isset($_GET['id'])){                // This will show if the url id is ok
    
    echo "id is set to number:"; echo $_GET["id"];
} 

?>


  </body>
</html>

