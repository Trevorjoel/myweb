
<html>
<head><link rel="stylesheet" type="text/css" href="main.css">

<title></title>


</head>

<body>
<div id="wrapper">
<div class="rslides_container">
<ul id="slides1" class="rslides">
  <li><img src="images/lusa/1486795_228475207327696_1146587795_n.jpg" alt="hi"><p class="caption">Donec id elit non mi porta gravida at eget metus.</p></li>
  <li><img src="images/lusa/1499377_231753720333178_1823201996_n.jpg" alt=""><p class="caption">Donec id elit non mi porta gravida at eget metus.</p></li>
  <li><img src="images/lusa/12049257_490311401144074_7502857575961607934_n.jpg" alt=""></a><p class="caption">Donec id elit non mi porta gravida at eget metus.</p></li>
  
</ul>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="responsiveslides.min.js"></script>
<script>
  $(function() {
	  $(".rslides").responsiveSlides({
		  auto: false,             // Boolean: Animate automatically, true or false
		  speed: 500,            // Integer: Speed of the transition, in milliseconds
		  timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
		  pager: false,           // Boolean: Show pager, true or false
		  
			  nav: true,             // Boolean: Show navigation, true or false
		  random: false,          // Boolean: Randomize the order of the slides, true or false
		  pause: false,           // Boolean: Pause on hover, true or false
		  pauseControls: true,    // Boolean: Pause when hovering controls, true or false
		  prevText: "",   // String: Text for the "previous" button
		  nextText: "",       // String: Text for the "next" button
		  maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
		  navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
		  manualControls: "",     // Selector: Declare custom pager navigation
		  namespace: "rslides",   // String: Change the default namespace used
		  before: function(){},   // Function: Before callback
		  after: function(){}     // Function: After callback
		});
  });
  
</script>
</div>
</body>

</html>