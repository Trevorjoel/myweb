<html>

	<head>
   		<title> Home page</title>
			<?php include 'header.php'; ?>
    			<link rel="stylesheet" href="main.css">
    				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	</head>

	<body>
		<div id="fb-root"></div>
			<script>(function(d, s, id) {
  				var js, fjs = d.getElementsByTagName(s)[0];
  					if (d.getElementById(id)) return;
  						js = d.createElement(s); js.id = id;
  						js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.5";
  						fjs.parentNode.insertBefore(js, fjs);
}
			(document, 'script', 'facebook-jssdk'));</script>
<br><br><br><br>
			<h1>Home page</h1>

  	<div class="textopacity">
		<p>Welcome to our ever developing web site.</p> <p>Those who love music, art, 
		travel and want to be a part of an intellegent and loving community have come to the right place.
		<br>This page is where you will find updates from the entire site.</br><br>
		You may Navigate on you own, use the search function or click on the buttons.<br>
		More about that and everything else you may need here:<br><a style="float:left;"href="about.php"><img src="images/buttonreadmore.png" WIDTH=101 HEIGHT=41 ></a><br><br>
			I hope you enjoy my work and share your ideas with me.<br>
		</p>
		</div>
	  		
    		<h1 style="font-size : 250%">Latest updates</H1>
    		<hr> 		  	
	
    		 <div class="flexbox">
    		 		  <article style="width:100%;" class=articleform>

  <header> <H4>Site testers!</H4></header>
  <hr>
  <p>Published: <time pubdate="pubdate">Date</time></p>
 <IMG class="tst3"SRC="images/notice.png" ALT="erlbanner" WIDTH=328 HEIGHT=195>
  <p>This site is in the test phase. <br>You have been chosen to test my site. <br>Please try all the features and report back to me.<br>
You can view the code here: <a href="https://github.com/Trevorjoel/myweb">https://github.com/Trevorjoel/myweb</a>
I'm looking for various issues not limited to the following.<br><br>
	1) Can you hack it? (developers). SQL injections particularly can you insert data to my base (sexy time) can you somehow get a script to run on the page, spam me or any other nasties I might not be aware of.<br><br>
	2) Style (designers), Are there any obvious problems with the design, functionality and look of the site?<br><br>
	3) Feeling. (Everyone/designers) is it nice upon the eyes?  Does it have the appearance of an intelligent place to gather information, entertain yourself.<br><br>
	4) Functionality/features/content. Are there any extra features you would like  to see? Is the content interesting or would you like to see something else (yes I'm waiting for more Travel and community content). <br>Are there any broken links or issues I may not have seen?<br><br>
	5) Writing. How do you like the writing style? Are there any obvious spelling/grammatical errors? What about the format in the articles, is there any guides you think I should read to improve things?<br>
  <em><br><br>Notice: Be sure the url says index.php?id=11 if you want to make a comment below. 
  <br>Notice: The user uploads forms are incomplete. No data will be transfered through the forms yet.
  <br>Notice: I may be giving you the temporary URL in hopes you will write something for me. You may negotiate a deal in exchange for your efforts, try me.</em>
  <br>You can use the comment form below to message me your thoughts as any feedback is much appreciated.</p>      
        <br>
        
   <p>Author: <time pubdate="pubdate">Trevor</time></p>
<hr>
  <footer>
  </footer>

            <?php include 'list_comments.php'; include 'comment.php'; ?>
</article>
    		
    		 <div class="featuresColumn">
       		
    		<article class=articleform>
    		
    		      <IMG style="float: right;"class="flagimage"SRC="images/label_new red.png" ALT="newbutton" WIDTH=80 HEIGHT=60>
    		
      			<H4>Presenting the Jingles</H4>
      			<hr>
      				<IMG class="tst3"SRC="images/jinglescasualwide.jpg" ALT="Enjoy" WIDTH=250 HEIGHT=150>
        			<IMG style="float: right;"class="flagimage"SRC="images/estonianflag.jpg" ALT="theteachermarket" WIDTH=80 HEIGHT=60>
          			<p><b>Name:<br>The Jingles<br>
           			Location:<br> Tallin, Estonia </b></p>
           			<p>This great four peice band out of Estonia are long time friends of mine.</p>
           			<p>They consist of Jonathan flack on guitars and vocals, Rauno Vaher on percussion, Hainn Hoppe on guitars and Tanel Liberg on 
            			bass..<br><a href="thejingles.php?id=2"><img src="images/buttonreadmore.png" WIDTH=101 HEIGHT=41 ></a></p> 
           			
           </article>
           
    		</div>
 

    <div class="featuresColumn"> 
     <article class=articleform>
           <IMG style="float: right;"class="flagimage"SRC="images/label_new red.png" ALT="newbutton" WIDTH=80 HEIGHT=60>
     
      <H4>English for real life</H4>
      <hr>
        <IMG class="tst3"SRC="images/erlbanner1.jpg" ALT="erlbanner" WIDTH=250 HEIGHT=146>
       <IMG style="float: right ;"class="flagimage"SRC="images/russianflag.jpg" ALT="theteachermarket" WIDTH=80 HEIGHT=60>
        <IMG style="float: right;"class="flagimage"SRC="images/skypelessons.jpg" ALT="theteachermarket" WIDTH=90 HEIGHT=60>
        <b><p>Name:<br>English For Real Life<br>
          Location:<br> Moscow, Russia</p></b>

        <p>English For Real Life is run by Trevor from Australia, the creator of this website who has many years experience teaching 
          English to Adults and to children of all ages.</p><p>

        My courses are tailored to...<br><a href="english-for-real-life.php?id=3"><img src="images/buttonreadmore.png" WIDTH=101 HEIGHT=41 ></a>  </p>
     </article>
    </div>
    
  
    
<div class="featuresColumn">
    <article class=articleform>
          <IMG style="float: right;"class="flagimage"SRC="images/label_new red.png" ALT="newbutton" WIDTH=80 HEIGHT=60>
    
      <H4>Learning how to learn</H4>
      <hr>
       <IMG class="tst3"SRC="images/573647.jpg" ALT="php" WIDTH=288 HEIGHT=180> <p><b>The internet is a wonderful place for learning about anything,</b> however, the hardest part is finding good information, the needles in the haystack so to speak. You can spend hours on terrible tutorials with teachers who have the charm and personality of a wet ashtray or days scouring through poorly put together instructions.</p> 

        

        <br><a href="learning-how-to-learn.php?id=9"><img src="images/buttonreadmore.png" WIDTH=101 HEIGHT=41 ></a>
         
    </article>
</div>
 
  <div class="featuresColumn">
    <article class=articleform>
          <IMG style="float: right;"class="flagimage"SRC="images/label_new red.png" ALT="newbutton" WIDTH=80 HEIGHT=60>
    
      <H4>English teachers</H4>
      <hr>
      <IMG style="float': left;"class="tst3"SRC="images/theteachermarket.jpg" ALT="theteachermarket" WIDTH=240 HEIGHT=155> 
      <IMG style="float: right;"class="flagimage"SRC="images/russianflag.jpg" ALT="theteachermarket" WIDTH=80 HEIGHT=60>
      <b><p>Name:<br>The Teacher Market 
      Location:<br>Moscow, Russia</p></b><p>
        The Teacher Market is run by Terry Nuss from Alaska. It is a new organisation that connects the right language teachers 
        to the right students around the world, through Skype and face-to-face lessons.</p> <p>The Teacher Market increases the teacher's 
        bargaining power by...<a href="theteachermarket.php?id=4"><img src="images/buttonreadmore.png" WIDTH=101 HEIGHT=41 ></a></p>

    </article>

 
</div> 
     
  <div class="featuresColumn">
  
    <div ID ="bret" class="container_gallery">
      <div class="textopacity">
      <IMG style="float: right;"class="flagimage"SRC="images/label_new red.png" ALT="newbutton" WIDTH=80 HEIGHT=60>
       

      <h1 style="font-size : 200%">Artist profile and Gallery</h1>
      <hr>
      
        <IMG class="tst3"SRC="images/bret_profile.jpg" ALT="bret and sam" WIDTH=240 HEIGHT=135>
        <IMG style="float: right;"class="flagimage"SRC="images/australianflag.jpg" ALT="theteachermarket" WIDTH=80 HEIGHT=60>
          <IMG style="float : ;"class="flagimage"SRC="images/cameraicon.png" ALT="theteachermarket" WIDTH=60 HEIGHT=60>        
          <b><p>Name:<br>Bret and Sam <br>
          Location:<br>Broome, Western Australia</p></b>
          <p>Bret and Sam are a true Aussie adventure couple.<p> I don't think I am biased when I say my brother and his wonderful fiance  
          are inspirational travelers, artists, and great...<br><a href="gallery_aus.php?id=5">
          <img src="images/buttonreadmore.png" WIDTH=101 HEIGHT=41 ></a>
    </div>
   </div>
         
  </div>
    


  <div class="featuresColumn">
    <article class=articleform>
          <IMG style="float: right;"class="flagimage"SRC="images/label_new red.png" ALT="newbutton" WIDTH=80 HEIGHT=60>
    
      <H4>Play our cunt of the year game</H4>
      <hr>
      <IMG class="tst3"SRC="images/donaldtrump.jpg" ALT="Enjoy" WIDTH=150 HEIGHT=150><br/><p>
      Simply click the link to find out whats grinding our writer Alberts gears and hear what he has to say about them....
      <br><a href="award.php?id=8"><img src="images/game.jpg" WIDTH=111 HEIGHT=77 ></a>
   </article>
   </div>
  </div>

<?php include 'yourarticle.php';  ?>
<?php include 'footer.php';?>
</body>

</html>