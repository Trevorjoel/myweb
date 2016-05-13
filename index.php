<html>

<head>
<title>Home page</title>
    <?php include 'header.php'; ?>
    <link rel="stylesheet" href="main.css">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<div id="fb-root"></div>
	<script type="text/javascript">
        (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.5";
                fjs.parentNode.insertBefore(js, fjs);
            }
            (document, 'script', 'facebook-jssdk'));
    </script>
</head>

<body>
	
	 <div id="spacer">.</div>

	<div id="head_home">

		<h1 id="home">Home page</h1>
	
		

		
			
					
				
	
		<p id="home1">Welcome to our ever developing web site.
			Those who love music, art, travel and want to be a part of an
			intellegent and loving community have come to the right place. 
			<br> More about that and everything else you may need here:
			<br> I hope you enjoy my work and share your ideas with me. 
			<a style="float: right;" href="about.php"><img src="images/buttonreadmore.png" width="101" height="41" alt=""> </a><br>
			<a href="upload.php?id=10"><img src="images/upload.png"
				width="150" height="43" alt=""></a>
		</p>
	</div>
	
	<h1 style="font-size: 250%">Latest updates</H1>
	

<hr>
	<div class="flexbox">
		<article id="articleform_home">

			<header>
				<h4>Site testers!</h4>
			</header>
			<hr>
			<p>
				Published:
				<time pubdate="pubdate">Date</time>
			</p>
			<img class="img" src="images/notice.png" alt="erlbanner" width="328"
				height="195">
			<p>
				This site is in the test phase. <br>You have been chosen to test my
				site. <br>Please try all the features and report back to me. <br>
				You can view the code here: <a
					href="https://github.com/Trevorjoel/myweb">https://github.com/Trevorjoel/myweb</a>
				I'm looking for various issues not limited to the following. <br> <br>
				1) Can you hack it? (developers). SQL injections particularly can
				you insert data to my base (sexy time) can you somehow get a script
				to run on the page, spam me or any other nasties I might not be
				aware of. <br> <br> 2) Style (designers), Are there any obvious
				problems with the design, functionality and look of the site? <br> <br>
				3) Feeling. (Everyone/designers) is it nice upon the eyes? Does it
				have the appearance of an intelligent place to gather information,
				entertain yourself. <br> <br> 4) Functionality/features/content. Are
				there any extra features you would like to see? Is the content
				interesting or would you like to see something else (yes I'm waiting
				for more Travel and community content). <br>Are there any broken
				links or issues I may not have seen? <br> <br> 5) Writing. How do
				you like the writing style? Are there any obvious
				spelling/grammatical errors? What about the format in the articles,
				is there any guides you think I should read to improve things? <br>
				<em><br>
				<br>Notice: Be sure the url says index.php?id=11 if you want to make
					a comment below. <br>Notice: The user uploads forms are incomplete.
					No data will be transfered through the forms yet. <br>Notice: I may
					be giving you the temporary URL in hopes you will write something
					for me. You may negotiate a deal in exchange for your efforts, try
					me.</em> <br>You can use the comment form below to message me your
				thoughts as any feedback is much appreciated.
			</p>
			<br>

			<p>
				Author:
				<time pubdate="pubdate">Trevor</time>
			</p>
			<hr>
			<footer> </footer>

            <?php include 'list_comments.php'; include 'comment.php'; ?>
        </article>

		<div class="featuresColumn">

			<article class="articleform">

				<img style="float: right;" class="flagimage"
					src="images/label_new red.png" alt="newbutton" width="80"
					height="60">

				<h4>Presenting the Jingles</h4>
				<hr>
				<img class="tst3" src="images/jinglescasualwide.jpg" alt="Enjoy"
					width="340" height="190"> 

				<p>This great four peice band out of Estonia are long time friends
					of mine.</p>
				<p>
					They consist of Jonathan flack on guitars and vocals, Rauno Vaher
					on percussion, Hainn Hoppe on guitars and Tanel Liberg on bass.. <br>
					<a href="thejingles.php?id=2"><img src="images/buttonreadmore.png"
						width="101" height="41" alt=""> </a>
						<img style="float: right;"
					class="flagimage" src="images/estonianflag.jpg"
					alt="theteachermarket" width="65" height="45">
					<img
					style="float: right;" class="flagimage"
					src="images/movie.jpg" alt="movie" width="45" height="45">
				</p>

			</article>

		</div>


		<div class="featuresColumn">
			<article class="articleform">
				<img style="float: right;" class="flagimage"
					src="images/label_new red.png" alt="newbutton" width="80"
					height="60">

				<h4>English for real life</h4>
				<hr>
				
				<img class="tst3" src="images/erlbanner1.jpg" alt="erlbanner"
					width="340" height="190"> 


				<p>English For Real Life is run by Trevor from Australia, the
					creator of this website who has many years experience teaching
					English to Adults and to children of all ages.
				

					My courses are tailored to... <br> <a
						href="english-for-real-life.php?id=3"><img
						src="images/buttonreadmore.png" width="101" height="41" alt=""> </a>
				
				<img style="float: right;"
					class="flagimage" src="images/russianflag.jpg"
					alt="theteachermarket" width="65" height="45"> <img
					style="float: right;" class="flagimage"
					src="images/skypelessons.jpg" alt="theteachermarket" width:"65" height="45">
					</p>
			</article>
		</div>



		<div class="featuresColumn">
			<article class="articleform">
				<img style="float: right;" class="flagimage"
					src="images/label_new red.png" alt="newbutton" width="80"
					height="60">

				<h4>Learning how to learn</h4>
				<hr>
				<img class="tst3" src="images/573647.jpg" alt="php" width="340" height="190">
				<p>
					<b>The internet is a wonderful place for learning about anything,</b>
					however, the hardest part is finding good information, the needles
					in the haystack so to speak. You can spend hours on terrible
					tutorials with teachers who have the charm and personality of a wet
					ashtray or days scouring through poorly put together instructions.
				</p>

					<a href="learning-how-to-learn.php?id=9"><img
					src="images/buttonreadmore.png" width="101" height="41" alt=""> </a>
					<img
					style="float: right;" class="flagimage"
					src="images/movie.jpg" alt="movie" width="45" height="45">

			</article>
		</div>

		<div class="featuresColumn">
			<article class="articleform">
				<img style="float: right;" class="flagimage"
					src="images/label_new red.png" alt="newbutton" width="80"
					height="60">

				<h4>English teachers</h4>
				<hr>
				<img style="float ': left;" class="tst3"
					src="images/theteachermarket.jpg" alt="theteachermarket"
					width="340" height="190"> 

				<p>The Teacher Market is run by Terry Nuss from Alaska. It is a new
					organisation that connects the right language teachers to the right
					students around the world, through Skype and face-to-face lessons.
					The Teacher Market increases the teacher's bargaining power by... <a
						href="theteachermarket.php?id=4"><img
						src="images/buttonreadmore.png" width="101" height="41" alt=""> </a>
						<img style="float: right;"
					class="flagimage" src="images/russianflag.jpg"
					alt="theteachermarket" width="65" height="45">
				</p>

			</article>


		</div>

		<div class="featuresColumn">

			<div id="bret" class="container_gallery">
				<div class="textopacity">
					<img style="float: right;" class="flagimage"
						src="images/label_new red.png" alt="newbutton" width="80"
						height="60">


					<h1 style="font-size: 200%">Artist profile and Gallery</h1>
					<hr>

					<img class="tst3" src="images/bret_profile.jpg" alt="bret and sam"
						width="310" height="180"> 

					<p>Bret and Sam are a true Aussie adventure couple.</p>
					<p>
						I don't think I am biased when I say my brother and his wonderful
						fiance are inspirational travelers, artists, and great... <br> <a
							href="gallery_aus.php?id=5"> <img src="images/buttonreadmore.png"
							width="101" height="41" alt=""><img style="float: right;"
						class="flagimage" src="images/australianflag.jpg"
						alt="theteachermarket" width="65" height="45"> <img
						style="float:;" class="flagimage" src="images/cameraicon.png"
						alt="theteachermarket" width="45" height="45">
						</a>
					</p>
				</div>
			</div>

		</div>



		<div class="featuresColumn">
			<article class="articleform">
				<img style="float: right;" class="flagimage"
					src="images/label_new red.png" alt="newbutton" width="80"
					height="60">

				<h4>Play our cunt of the year game</h4>
				<hr>
				<img class="tst3" src="images/donaldtrump.jpg" alt="Enjoy"
					width="150" height="150"> <br />
				<p>
					Simply click the link to find out whats grinding our writer Alberts
					gears and hear what he has to say about them.... <br> <a
						href="award.php?id=8"><img src="images/game.jpg" width="111"
						height="77" alt=""> </a>
				</p>
			</article>
		</div>
	</div>

    <html>


<article class="articleform"  style="width: 94%;">
<IMG style="float: right;"class="flagimage"SRC="images/world.png" ALT="theteachermarket" WIDTH=50 HEIGHT=50>
<header> <h1 style="font-size : 250%">Your Article here?</h1></header>
<hr>
<IMG class="tst3"SRC="images/Silhouette-question-mark.jpeg" ALT="php" WIDTH=180 HEIGHT=180><p>



<p>You may upload your own articles or advertise your products and services on our site.
Please go to the upload page and read about how it works.</p>

<a href="upload.php?id=10"><img src="images/upload.png" WIDTH=201 HEIGHT=58 ></a>


 

<p><A HREF="LINK"></A></p>

<footer>
<p>Author: <time pubdate="pubdate">You!</time></p>
</footer>
</article>
</html>


    <?php include 'footer.php';?>

</body>

</html>