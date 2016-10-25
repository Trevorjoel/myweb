<html>

<head>
<title>award</title>
<link rel="stylesheet" href="main.css">
	<?php include 'header1.1.php'; ?>
	<? include("insert_to.php"); ?>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-78511318-1', 'auto');
  ga('send', 'pageview');

</script>

	</head>
<body>

<?php include 'sidebar_right.php'; ?>
<br>
	<br>
	<br>
	<br>
<?php

echo '<h1>Alberts "Cunt of the year award"</h1>';

?>
 <article class="articleform bottom-spacer">
   
<?php

// Create an array and push on the names
// of your closest family and friends

$cunts = array (
		"Nickelback",
		"George Bush",
		"Donald Trump" 
);
array_push ( $cunts, "Whatever the fuck this is!" );
array_push ( $cunts, "Tony Abbott" );
array_push ( $cunts, "Jusin Bieber" );
array_push ( $cunts, "Your Mum", "Fat sluts", "Dick Cheney", "Monday Morning", "Running out of coffee", "you", "Catholic Priests" );

$sort = sort ( $cunts );

print strtoupper ( "<h4 style='font-size : 180%'>This years award for outstanding cuntery goes to: <br></h4>" );


$winner = $cunts [rand ( 0, count ( $cunts ) - 1 )];
		
		
print strtoupper ( "<h1 style='font-size : 350%'>$winner</h1>" );

?>
<input style="float:right;" class="button" type="button" value="PLAY AGAIN!"
		onclick="location.reload();"><br>
		
				<?php
				
switch ($winner) {
		
	case "Nickelback" :
		'Nickelback';
		print ("<article id='articleform_awards'>Nickelback abuse<footer>
    <p><small>Creative Commons Attribution-ShareAlike License</small></p>
  </footer></article>") ;
		break;
	
	case 'Donald Trump' :
		'Donald Trump';
		print ('<article id="articleform_awards"><IMG SRC="images/donaldtrump.jpg" ALT="Enjoy" WIDTH=200 HEIGHT=200><p>This is a no brainer. <br>First of all, on his head is a bag of 
						assholes loosely arranged to take on the appearance of a human face. <br><br>To add to the horror, he has clearly 
						soaked those unfortunate assorted animal assholes in some kind of spray on tanning lotion and left them to 
						dry in the sun. <br><br>On top of this monstrosity sits another repugnant feature that he would have a fool 
						believe is his own hair. <br><br>Sources close to Donald tell another story of how he and his vile excuse for a 
						son would hunt and kill wild orangutans to shave off the hair from around the unfortunate simians asshole 
						and have it surgically implanted into his own head. </p><p>The mere sight of this waste of space could send the 
						Dali Lama into a murderous fit of rage, and oh boy when he opens that hole in his so-called face it makes 
						a sane man want to kill it with fire or hope a galaxy destroying black hole would swallow everything and 
						leave no trace of life anywhere.<br><br>Let\'s hope a nasty accident happens sooner rather than later. <br><br>The question is would you kill baby hitler?</p><footer>
    <p><small>Creative Commons Attribution-ShareAlike License</small></p>
  </footer></article>') ;
		break;
	
	case 'George Bush' :
		'George Bush';
		print ('<article id="articleform_awards"><p></p><footer>
    <p><small>Creative Commons Attribution-ShareAlike License</small></p></article>
  </footer>') ;
		break;
	case 'Your Mum' :
		'Your Mum';
		print ('<article id="articleform_awards"><IMG SRC="images/yourmum.jpg" ALT="Enjoy" WIDTH=332 HEIGHT=332><p>Thats right, YOUR mum, yes YOURS! <br><br>Little do you 
				know when you and the rest of the town are tucked up tight in their beds at night your mum is out whoring 
				herself off, often $30-$50 cheaper than the average crack whore. <br><br>Her cheap price and 
				voracious work-load have pushed the prices of sexual favours down to an all time low. Thus forcing many 
				crack whores to accept unreasonable pay and conditions.</p><footer>
    <p><small>Creative Commons Attribution-ShareAlike License</small></p></article>
  </footer>') ;
		break;
	case 'Monday Morning' :
		'Monday Morning';
		print ("<article id='articleform_awards'><p>You know what I'm talking about right? <br><br>After a nice weekend diving 
				into an epic bender, it's hard to get back to work. <br><br>Nothing to do with the crazy Friday to Sunday binge or 
				the 1-hour sleep I got.  <br>It's those lazy, good-for-nothing, scatterbrained assholes I have to work with.<br><br> 
				If it wasn't for the cost of Meth and Moonshine you wouldn't see me at work on Monday or any other goddamn day 
				of the week, furthermore, if it wasn't for those assholes at work I wouldn't need the Moonshine and Meth.<br><br> 
				If I had my way I'd have all of them shot and Monday banished to Hell.</p><footer>
    <p><small>Creative Commons Attribution-ShareAlike License</small></p>
  </footer></article>") ;
		break;
	
	case 'Catholic Priests' :
		'Catholic Priests';
		print ('<article id="articleform_awards"><IMG SRC="images/catholics.jpg" ALT="Enjoy" WIDTH=512 HEIGHT=180>
						<p>Seriously, guys, what the fuck is wrong with these assholes. <br><br>I understand ya gotta fuck somebody but,
						 KIDS? <br>And if they\'re not fucking children they are covering for someone else who is.<br><br> 
						 Why ya gotta go fuck kids? <br><br>I just don\'t get it. I mean there\'s enough cheap whores out there. Pass 
						 that collection tin around another time, go get yourselves a cheap ho\' for the night. Blast some 1080p porn vids, 
						 I\'m sure God doesn\'t care you all know the fucker doesn\'t exist.<br><br> Just where in that toilet-paper-substitute Bible does 
						 it say fucking kids is ok? <br><br>Why is it always Catholic priests, these cunts just can help themselves? <br><br>
						 You\'re telling people they\'ll go to hell for having sex before marriage or fucking another dude in the ass and you fuck kids.<br><br> Fuck off!<br>
				All your arguments are invalid!
						 </p><footer>
    <p><small>Creative Commons Attribution-ShareAlike License</small></p>
  </footer></article>') ;
		break;
	
	case 'you' :
		'you';
		print ('<article id="articleform_awards">
						<IMG style="float: none" SRC="images/youhand.png" ALT="Enjoy" WIDTH=254 HEIGHT=198>
						<IMG style="float: right"SRC="images/youtext.jpg" ALT="Enjoy" WIDTH=339 HEIGHT=148>

						<p>Yes, and you know why. <br><br>Don\'t say you didn\'t expect it! <br><br>Sitting there all smug like an unfeasibly giant maggot, \'pressing play\' again over and over like Charlie Sheen doing 
						lines of coke off a pornstars asshole. <br><br>Don\'t you have something better to do, like get your 
						child out of the car you left in the hot sun?
						 </p><footer>
    <p><small>Author: Albert</small></p>
  </footer></article>') ;
		break;
	
	case 'Fat sluts' :
		'Fat sluts';
		print ('<article id="articleform_awards"> <IMG style="float: none"SRC="images/fatslut.jpg" ALT="Enjoy" 
						WIDTH=210 HEIGHT=260>
						<p>Because they are fat, they are sluts and they talk shit. <br><br>"Im big boned" they say as their jowls
						wobble.<br><br>  "You shouldn\'t smoke" as they lift a coke with their giant, sweaty, stinky, flabby arms.<br><br>
						Often-times the fat slut can be as rapey as any man, forcing you to have another drink with them.<br><br>
						Safe in the knowledge they can absorb the alcohol of five grown horses and with the hopes of you becoming 
						drunk enough to regret taking them home, accept that tripple tequila and
				rohypnol with caution.
						 </p><footer>
    <p><small>Creative Commons Attribution-ShareAlike License</small></p>
  </footer></article>') ;
		break;
		
		case 'Whatever the fuck this is!' :
			'Whatever the fuck this is!';
			print ('<article id="articleform_awards"> <IMG style="float: none"; SRC="images/manbuns.jpg" ALT="Enjoy"
						><br><br><p>No seriously you are going to look like the biggest cunt in 10 years time.</p>
						<p>
						 </p><footer>
    <p><small>Creative Commons Attribution-ShareAlike License</small></p>
  </footer></article>') ;
			break;
	
	default :
		print ("<br>" . "<p>" . "Because I said so" . "</p>") ;
}



				
?>
      			
				 

 
</article>
</body>
<?php include 'footer1.1.php';?>
	</html>

