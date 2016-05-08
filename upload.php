<html>

<header>
	<title>Upload</title>
	<link rel="stylesheet"
		href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="main.css">
<?php include 'header.php';?>
	</header>
	
	<?php include 'sidebar_right.php'; ?>
	<br>
<br>
<br>
<br>
<h1 id="sub">How to get your work online?</h1>
.
<body>
	<article class="articleform">



		<p>There are two different forms for those who want to upload their
			content. Both forms are shown below this instructional text.</p>

		<h4 id="about" style="font-size: 150%">1) Marketplace form</h4>

		<p>Those who want to advertise their products and services should fill
			out this form.</p>
		<p>Here's how:</p>

		<p>a) Fill out your basic details and email in case we have any
			problems and we need to contact you.</p>
		<p></p>
		<p>
			b) Fill out the title and text body.<br> You can choose to answer all
			the question fields so that we can write up an article for you or you
			can copy your entire article into the last text field, so long as all
			the basic information is provided. All the questions on the form can
			prompt you to write a clear and coherent article. <b>Please ensure
				the text has been proofread and ready to be posted to the site.</b>

		</p>
		<p>c) Include links to your website, facebook, twitter, skype and
			other contacts. We will create buttons so potential customers can
			click to go directly to your accounts.</p>
		<p>d) Upload images. We need pictures, logos etc, anything you would
			like us to use to create the image of your brand.</p>
		<p>e) Message to the admin. If there is any information that you need
			the admin to know when they are writing and formatting your article
			please include it here.</p>
		<p>
			f) <b>Double check all information before pressing "Post".</b>
		</p>
		<hr>
		<h4 id="about" style="font-size: 150%">2) All other sections
			(Music/Art, Community, Humour, Travels, Teach/Learn).</h4>
		<p></p>
		<p>These sections are informative articles or creative writing the
			forms are simple to fill out.</p>
		<p>Here's how:</p>

		<p></p>
		<p>a) Give your basic details and contacts in case we have any
			problems and need to contact you.</p>
		<p>b) Select the area of the site you want your article published.</p>
		<p>
			c) The title of the article and article text. <b>Please ensure the
				article has been proofread and is ready to go.</b> To iron out the
			syntax I suggest https://app.grammarly.com. <b>Please ensure your
				information is factually correct and void of any bigotry or hatred.</b>

		</p>
		<p>d) Include links to your website, facebook, twitter, skype and
			other contacts. We will create buttons people can click to go to to
			see more of your work or to contact you.</p>
		<p>e)Message to the admin. If there is any information that you need
			the admin to know when they are writing and formatting your article
			please include it here.</p>
		<p>
			<b>f) Double check all information before pressing "Post".</b>
		</p>
		<hr>

		<p></p>
		<h4 id="about" style="font-size: 150%">What happens after you post or
			if you make a mistake?</h4>

		<p>First, you will be sent a confirmation email that we have received
			your mail and our admins will be notified. Then we will check over
			the materials and contact you if there are any problems.</p>
		<p></p>
		<p>When your information has been checked and formatted you will be
			sent a link so we can get a final approval from you to publish.</p>
		<p></p>
		<p>When no more changes are to be made we post it and send an email
			and you can go to see your articles and comments people have made.</p>
		<p>
			If you have <b>any questions or need to make changes</b> to your
			article you can use the comment box below. Or go to contacts and
			email us.
		</p>
<?php
include 'list_comments.php';
include 'comment.php';
?>
</article>
	<article style="width: 38%" class="articleform">

		<h1 id="sub" style="font-size: 250%">All other uploads</h1>
		<p>
			Please read the instructions above before filling out the form.<br> *
			Required fields

		</p>
		<form name="htmlform" method="post" action="form_others.php"
			enctype="multipart/form-data">
			<div width="450px">
				<label for="first_name"><p>
						First Name * <br> <input name="first_name" maxlength="50"
							size="30" placeholder="First name" value="" required="required"
							type="text"> <br>
						<br> <label for="last_name">Last Name *</label><br> <input
							style="float: left" name="last_name" maxlength="50" size="30"
							placeholder="Last name" value="" required="required"> <br>
						<br> <label for="email">Email Address *<br></label> <input
							name="email" maxlength="80" size="30" placeholder="Email address"
							value="" required="required" type="text">
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
							type="text"> <br>
						<br> <label for="comments">Copy your article text here. *</label>

						<textarea style="float: left;" name="article_body"
							maxlength="10000" cols="58" rows="25"
							placeholder="Main article body" value="" required="required"></textarea>

						<br> <label for="urls"><br>Copy your links here:</label> <br>
						<textarea style="float: left;" name="links" maxlength="10000"
							cols="58" rows="5" placeholder="Links"></textarea>
						<br>
						<br>

					</p>
					<div>
						<p>
							<label for="uploads"><br>
							<br>Upload your images. Only jpg, jpeg, png files accepted 2mb or
								smaller. Maximum 10 files:</label>
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
		</form>
	</article>

	<!-- Marketplace form -->
	<article style="width: 38%" class="articleform">
		<h1 id="sub" style="font-size: 250%">Marketplace</h1>
		<p>Please read the instructions before filling out the form.</p>
		<form name="htmlform" method="post" action="form_marketplace.php"
			enctype="multipart/form-data">
			<div width="450px">

				<label for="first_name"><p>
						First Name * <br> <input name="first_name" maxlength="50"
							size="30" placeholder="What's up?" value="" required="required"
							type="text"> <br>
							
						<br> <label for="last_name">Last Name *</label><br> <input
							style="float: left" name="last_name" maxlength="50" size="30"
							placeholder="What's up?" value="" required="required"> <br>
							
						<br> <label for="email">Email Address *<br></label> <input
							name="email" maxlength="80" size="30" placeholder="What's up?"
							value="" required="required" type="text">
					</p>
					<p>

						<label for="bus_name">Name of your orginization:*<br></label> <input name="bus_name"
							placeholder="What's up?" value="" required="required" type="text">

						<br> <br> <label for="comments">Describe exactly you sell or do.</label>

						<textarea style="float: left;" name="describe" maxlength="10000"
							cols="58" rows="8" placeholder="What's up?" value=""
							required="required"></textarea>


						<label for="comments"><br>
						<br>How long have you been doing it and how would you describe
							your philosophy or mission statement. What makes it unique?</label>

						<textarea data-gramm="" style="float: left;" name="mission"
							maxlength="10000" cols="58" rows="8" placeholder="What's up?"
							value="" required="required"></textarea>

						<br> <label for="comments"><br>Tell me something cool about
							yourself, services and achievements.</label>

						<textarea style="float: left;" name="achievements" maxlength="10000"
							cols="58" rows="8" placeholder="What's up?" value=""
							required="required"></textarea>
				

						<br> <label for="comments"><br>Anything else you would like to add
							about your business or product/ copy your self written article
							here.</label>

						<textarea data-gramm="" style="float: left;" name="more"
							maxlength="10000" cols="58" rows="8" placeholder="What's up?"
							value="" required="required"></textarea>

						<br> <label for="urls"><br>Copy your links here:</label> <br>
						<textarea style="float: left;" name="links" maxlength="10000"
							cols="58" rows="5" placeholder="What's up?"></textarea>
						<br>
						<br>

					</p>
					<div>
						<p>
							<label for="uploads"><br>
							<br>Upload your images. Only jpg, jpeg, png files accepted 2mb or
								smaller. Maximum 10 files:</label>
						</p>
						<input name="files[]" multiple type="file">

					</div> <br> <br>

					<div>
						<p>
							<label for="comments">Message to admin *</label> <br>

							<textarea data-gramm="" name="extra" maxlength="1000"
								cols="58" rows="10" placeholder="What's up?" value=""
								required="required"></textarea>

						</p>
					</div>


					<div colspan="2" style="text-align: center">
						<input value="Submit" type="submit">
					</div> </label>
			</div>
		</form>
	</article>
</body>
<footer>
   <?php include 'footer.php';?>
  </footer>



</html>