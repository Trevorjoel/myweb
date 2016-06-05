
<html>

<header>
	<title>Other uploads</title>
	<link rel="stylesheet"
		href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="main.css">
	<script src='https://www.google.com/recaptcha/api.js'
		type="text/javascript"></script>
<?php include 'header.php';?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-78511318-1', 'auto');
  ga('send', 'pageview');

</script>
	</header>
	
	<?php include 'sidebar_right.php'; ?>
	<br>
<br>
<br>
<br>
<h1 id="sub">Other Uploads</h1>
.
<body>

<article class="articleform">

	<h1 id="sub" style="font-size: 250%">All other uploads</h1>
	<p>
		Please read the instructions above before filling out the form.<br> *
		Required fields

	</p>
	<form name="htmlform" method="post" action="form_others.php"
		enctype="multipart/form-data">
		<div width="450px">
			<label for="first_name"><p>
					First Name * <br> <input name="first_name" maxlength="50" size="30"
						placeholder="First name" value="" required="required" type="text">
					<br> <br> <label for="last_name">Last Name *</label><br> <input
						style="float: left" name="last_name" maxlength="50" size="30"
						placeholder="Last name" value="" required="required"> <br> <br> <label
						for="email">Email Address *<br></label> <input name="email"
						maxlength="80" size="30" placeholder="Email address" value=""
						required="required" type="text">
				</p>
				<p>


					Select the area of the site you would like to have your work
					featured: <br> <select maxlength="50" name="publish_area">
						<option value="musicandart">Music and Art</option>
						<option value="travel">Travel</option>
						<option value="community">Community</option>
						<option value="teach_learn">Teach and Learn</option>
						<option value="humour">Just Laughs</option>
						<option value="dont_know">I dont know</option>
					</select> <br> <br>Title of your article:*<br> <input
						maxlength="50" size="30" name="title"
						placeholder="Title of article" value="" required="required"
						type="text"> <br> <br> <label for="comments">Copy your article
						text here. *</label><br>

					<textarea style="float: none;" name="article_body"
						maxlength="10000" cols="58" rows="25"
						placeholder="Main article body" value="" required="required"></textarea>

					<br> <label for="urls"><br>Copy your links here:</label> <br>
					<textarea style="float: left;" name="links" maxlength="10000"
						cols="58" rows="5" placeholder="Links"></textarea>
					<br> <br>

				</p>
				<div>
					<p>
						<label for="uploads"><br> <br>Upload your images. Only jpg, jpeg,
							png files accepted 2mb or smaller. Maximum 10 files:</label>
					</p>
					<input name="files[]" multiple type="file">

				</div> <br> <br>

				<div>

					<label for="comments">Message to admin </label> <br>

					<textarea name="extra" maxlength="1000" cols="58" rows="10"
						placeholder="Anything you need us to know?" value=""></textarea>

					<p></p>
				</div>


				<div colspan="2" style="text-align: center">
					<input value="Submit" type="submit">
				</div> </label>
		</div>
		<div class="g-recaptcha"
			data-sitekey="6LdMTSETAAAAANCTNvekuc8iitEvmEMWk4pK0hm7"></div>
		<div></div>
	</form>
</article>