		<!-- !CONTACT-INFO -->
		<div id="contact_me">
			<h2>Contact Me</h2>
			<hr />
			<div id="twitter">
				<img src="src/images/tweetie_bird.jpg" alt="Twitter" width="49" height="49" id="twitter_bird" />
				<div id="tweet">
					<?php echo $TWEET; ?>
				</div>
			</div>
			
			<ul id="info">
				<li>
					<img src="images/icons/icon_email.gif" alt="Email" width="28" height="26" class="icon" />
					<a href="mailto:tim.novinger@gmail.com" title="Send an e-mail">tim.novinger@gmail.com</a>
				</li>
				<li>
					<img src="images/icons/icon_phone.gif" alt="Phone" width="27" height="26" class="icon" />
					+1 (260) 918-4937
				</li>
				<li>
					<img src="images/icons/icon_twitter.gif" alt="Twitter" width="28" height="26" class="icon" />
					<a href="http://www.twitter.com/timnovinger" title="Follow Me!">follow me on twitter</a>
				</li>
				<li>
					<img src="images/icons/icon_tshirt.gif" alt="Twitshirt" width="27" height="26" class="icon" />
					<a href="http://twitshirt.com/timnovinger" title="Did I just say something funny on Twitter? Make it into a T-Shirt!">purchase a twitshirt</a>
				</li>
			</ul>
		</div>
	</div>	
	
	<!-- !FOOTER -->	
	<div id="footer">
		<div class="content">
			<span class="floatleft">&copy; Copyright <?php echo date('Y'); ?> Tim Novinger. All rights reserved.</span>
			<span class="floatright">Hosted by <a href="http://www.twitter.com/moutten" title="Matt Outten">@moutten</a></span>
		</div>
	</div>
	
	<!-- !Embedded hCard -->
	<div id="vcard-Tim-Novinger" class="vcard">
		<a class="url fn n" href="http://www.timnovinger.com">  
			<span class="given-name">Tim</span>
			<span class="family-name">Novinger</span>
		</a>
		<a class="email" href="mailto:tim.novinger@gmail.com">tim.novinger@gmail.com</a>
		<div class="adr">
			<span class="locality">Fort Wayne</span>, 
			<span class="region">IN</span>
			<span class="country-name">USA</span>
		</div>
		<div class="tel">+1 (260) 918-4937</div>
		<a class="url" href="aim:goim?screenname=timnovinger">AIM</a>
	</div>
	
	<!-- !Load JavaScript -->
	<script type="text/javascript" src="src/js/mootools-1.2.1-core-yc.js"></script>
	<script type="text/javascript" src="src/js/mootools-1.2-more.js"></script>
	<script type="text/javascript" src="src/js/jd.gallery.js"></script>
	<script type="text/javascript">	
		window.addEvent('domready', function() 
		{ 
			var myGallery = new gallery($('myGallery'), 
			{
				timed: true,
				embedLinks: false,
				showArrows: false,
				showCarousel: false,
				showInfopane: false,
				delay: 4000
			});
			
			var Scroller = new SmoothScroll({ duration:700 }, window); 
		});	
	</script>
	
	<!-- !Google Analytics
	<script type="text/javascript">
		var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
		document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
		try {
			var pageTracker = _gat._getTracker("UA-685060-3");
			pageTracker._trackPageview();
		} catch(err) {}
	</script>
	-->
	
	<!-- Don't steal my stuff, it's bad karma -->
</body>
</html>