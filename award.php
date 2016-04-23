<html>

	<head>
			<title>award</title>
			<link rel="stylesheet" href="main.css">
	<?php include 'header.php'; ?>
	<? include("insert_to.php"); ?>

	</head>
<body>
<?php include 'sidebar_right.php'; ?>
 <article class=articleform>  
<?php
 
	// Create an array and push on the names
    // of your closest family and friends
    
    echo '<h1>Alberts "Cunt of the year award"</h1>'; 
    echo "<hr>";
    
    $cunts = array("Nickelback", "George Bush", "Donald Trump");
	array_push($cunts, "Class 5V");
	array_push($cunts, "Tony Abbott");
	array_push($cunts, "Jusin Bieber");
	array_push($cunts, "Your Mum", "Fat sluts", "Dick Cheney", "Monday Morning", "Running out of coffee", 
	 "you",	"Catholic Priests");
	
	$sort = sort($cunts);
	print "<br>";
	print strtoupper ("<h4 style='font-size : 180%'>This years award for outstanding cuntery goes to: </h4>");
	print "<br>";
	
	$winner = $cunts[rand(0, count($cunts)-1)];

	print strtoupper("<h1 style='font-size : 350%'>$winner</h1>");




		switch ($winner){

			case "Nickelback" : 'Nickelback';
					print ("<article id='articleform_awards'>Nickelback abuse<footer>
    <p><small>Creative Commons Attribution-ShareAlike License</small></p>
  </footer></article>");
					break;

			case 'Donald Trump' : 'Donald Trump';
					print ('<article id="articleform_awards"><IMG SRC="images/donaldtrump.jpg" ALT="Enjoy" WIDTH=150 HEIGHT=150><p>This is a no brainer, first of all, on his head is a bag of 
						assholes loosely arranged to take on the appearance of a human face. To add to the horror, he has clearly 
						soaked those unfortunate assorted animal assholes in some kind of spray on tanning lotion and left them to 
						dry in the sun. On top of this monstrosity sits another repugnant feature that he would lead a fool to 
						believe is his own hair. Sources close to Donald tell another story of how he and his vile excuse for a 
						son would hunt and kill wild orangutans to shave off the hair from around the unfortunate simians asshole 
						and have it surgically implanted into his own head. </p><p>The mere sight of this waste of space could send the 
						Dali Lama into a murderous fit of rage, and oh boy when he opens that hole in his so-called face it makes 
						a sane man want to kill it with fire or hope a galaxy destroying black hole would swallow everything and 
						leave no trace of life anywhere.</p><footer>
    <p><small>Creative Commons Attribution-ShareAlike License</small></p>
  </footer></article>');
					break;
			
			case 'George Bush' : 'George Bush';
					print ('<article id="articleform_awards"><p></p><footer>
    <p><small>Creative Commons Attribution-ShareAlike License</small></p></article>
  </footer>');
					break;
			case 'Your Mum' : 'Your Mum'; print ('<article id="articleform_awards"><IMG SRC="images/yourmum.jpg" ALT="Enjoy" WIDTH=332 HEIGHT=332><p>Thats right, YOUR mum, yes YOURS! Little do you 
				know when you and the rest of the town are tucked up tight in their beds at night your mum is out whoring 
				herself to the highest bidder, often $30-$50 cheaper than the average crack whore. Her cheap price and 
				voracious work ethic have pushed the prices of sexual favours down to an all time low thus forcing many 
				crack whores to accept unreasonable pay and conditions.</p><footer>
    <p><small>Creative Commons Attribution-ShareAlike License</small></p></article>
  </footer>');
					break;
			case 'Monday Morning' : 'Monday Morning' ;
					print("<article id='articleform_awards'><p>You know what I'm talking about right? After a nice weekend relaxing 
				into an epic bender, it's hard to get back to work. Nothing to do with the crazy Friday to Sunday binge or 
				the 1-hour sleep I got.  It's those lazy, good-for-nothing, scatterbrained assholes I have to work with. 
				If it wasn't for the cost of Meth and Moonshine you wouldn't see me at work on Monday or any other goddamn day 
				of the week, furthermore, if it wasn't for those assholes at work I wouldn't need the Moonshine and Meth. 
				If I had my way I'd have all of them shot and Monday banished to Hell.</p><footer>
    <p><small>Creative Commons Attribution-ShareAlike License</small></p>
  </footer></article>");
					break;
			
			case 'Catholic Priests' : 'Catholic Priests';
					print ('<article id="articleform_awards"><IMG SRC="images/catholics.jpg" ALT="Enjoy" WIDTH=512 HEIGHT=180>
						<p>Seriously guys what the fuck is wrong with these assholes. I understand ya gotta fuck somebody but,
						 KIDS? And if they\'re not fucking children they are covering for someone else who is. 
						 Why ya gotta go fuck kids? I just don\'t get it. I mean there\'s enough cheap whores out there pass 
						 that collection tin around, go get yourselves a cheap ho\' for the night. Blast some 1080p porn vids, 
						 I\'m sure God doesn\'t care the fucker doesn\'t exist and just where in that cheap ass rag Bible does 
						 it say fucking kids is ok? Why is it always Catholic priests, these cunts just can help themselves? 
						 You\'re telling people they\'ll go to hell for having sex before marriage and you fuck kids. Fuck off!
						 </p><footer>
    <p><small>Creative Commons Attribution-ShareAlike License</small></p>
  </footer></article>');
					break;

					case 'you' : 'you'; 
					print ('<article id="articleform_awards">
						<IMG style="float: none" SRC="images/youhand.png" ALT="Enjoy" WIDTH=254 HEIGHT=198>
						<IMG style="float: right"SRC="images/youtext.jpg" ALT="Enjoy" WIDTH=339 HEIGHT=148>

						<p>Yes, and you know why. Don\'t say you didn\'t expect it! Sitting there all smug like an unfeasibly giant maggot, pressing \'CTRL-R\' over and over like Charlie Sheen doing 
						lines of coke off a pornstars asshole. Don\'t you have something better to do, like get your 
						child out of the car you left in the hot sun?
						 </p><footer>
    <p><small>Author: Albert</small></p>
  </footer></article>');
					break;
			
					case 'Fat sluts' :  'Fat sluts'; 
					print ('<article id="articleform_awards"> <IMG style="float: none"SRC="images/fatslut.jpg" ALT="Enjoy" 
						WIDTH=210 HEIGHT=260>
						<p>Because they are fat, they are sluts and they talk shit. "Im big boned" they say as their jowls
						wobble or "You shouldn\'t smoke" as they lift a coke with their giant, sweaty, stinky, flabby arms.
						Often times the fat slut can be as rapey as any man encouraging you to have another drink with them
						safe in the knowledge they can absorb the alcohol of five grown horses in the hopes of you becoming 
						drunk enough to regret taking them home.
						 </p><footer>
    <p><small>Creative Commons Attribution-ShareAlike License</small></p>
  </footer></article>');
					break;
					
			default:		
					print("Because I said so");
 }
 print strtoupper ("<h3>Press ctrl + R to play again</h3>");

           
      			include 'comment.php'; 
      			include 'list_comments.php';
				 
?>
 
</article>
</body>
	</html>

	