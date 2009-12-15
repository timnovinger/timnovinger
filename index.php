<?php 
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	$keywords = 'Tim Novinger, graphic design, graphic, design, freelance, fort wayne, indiana, development, mootools, twitter, mootools, jquery, iphone, ruby, rails, ruby on rails, RoR, screaming monkeys web guild, javascript, php, mysql, developer, advertising, web, print';
	
	$description = 'A web developer in Fort Wayne, Indiana experienced in creating and managing web sites, social media, and web design.';
	
	require_once('src/php/functions.inc.php');
	require_once('src/php/top.inc.php');
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
		<div id="content">
			<p class="headline">Welcome. I am a web developer / designer, car enthusiast, amateur photographer,
a geek, and a dad. <a href="portfolio" rel="portfolio" title="View my portfolio pieces">This is my portfolio</a> &rarr;</p>

			<div id="myGallery" class="imgborder">
				<?php require_once('src/php/gallery_images.inc.php'); ?>
			</div>
			<img src="src/images/large_shadow.png" alt="" id="myGallery_shadow" />
			
			<div id="col_wrapper">
				<div id="about_me">
					<h2>About Me</h2>
					<hr />
					<p><span class="img_frame frame_small floatright"><img src="images/timnovinger_b&w.jpg" alt="Tim Novinger" width="132" height="150" /></span>
						I'm a web developer located in Fort Wayne, Indiana with experience in creating, managing, and maintaining standards compliant web sites, client and server side programming, social media, and web design.</p>
						
					<p>I'm also a co-founder of the <a href="http://www.screamingmonkeys.org/" title="Check out the Web Guild I helped create">Screaming Monkeys Web Guild</a>, a local web development professional group, whose goal is to foster business networking, learning and creativity.</p>
					
					
					
					
					
					<h3>Languages I use and specialize in</h3>
					
					<p>Most of my time is spent in XHTML, CSS, Javascript (<a href="http://www.mootools.net" title="A compact, modular, Object-Oriented JavaScript framework">MooTools</a> or <a href="http://www.jquery.com" title="jQuery JavaScript framework">jQuery</a>), PHP, and MySQL although lately I've done a fair amount of work creating themes for <a href="http://rubyonrails.org/" title="Read about Rails, a framework for Ruby">Rails</a> based sites. I hand code everything according to web standards (<a href="http://w3c.org" title="Visit the W3C and read up on web standards NOW">W3C</a>). I love OpenSource software, and my favorite CMS to date is easily <a href="http://www.wordpress.org/" title="Wordpress">Wordpress</a>. I also have some experience with ColdFusion, and a little in ASP, but it's been a while.</p>
					
					<p>At the moment, I have also been wanting to play around with iPhone development &mdash; creating either Native Object-C applications, or mobile applications utilizing <a href="http://www.jqtouch.com" title="jQTouch, a jQuery based iPhone framework">jQTouch</a>. I love my iPhone and I really want to <strong>build</strong> something for it.</p>
					
					
					
					
					<h3>What tools do you use?</h3>
					<p>I work on a <a href="http://www.apple.com" title="Visit Apple, Inc.">Mac</a>, so naturally I use tools such as 
						<a href="http://www.panic.com/coda" title="One window web development for Mac OS X">Coda</a>, 
						<a href="http://macromates.com/" title="The missing editor for Mac OS X">TextMate</a>, 
						<a href="https://github.com/" title="Social Coding">GitHub</a> and the almighty Terminal, 
						<a href="http://www.sequelpro.com/" title="MySQL database management for Mac OS X 10.5+">Sequel Pro</a>, 
						<a href="http://iconfactory.com/software/xscope" title="Powerful on-screen tools for designers">XScope</a>, and 
						<a href="http://www.adobe.com/products/fireworks/" title="Rapidly prototype and design for the web">Fireworks</a>.
					</p>
					
					
					
					
					
					
					<h3>You do stuff other than code right?</h3>
					
					<p>I'm a dad first and foremost&mdash;much of my time is spent with my daughter. Otherwise I'm a petrol head, and can be found hanging out with local car clubs or autocrossing. I also love <a href="http://www.flickr.com/photos/timnovinger/" title="View my Photostream">photography</a>, my friends, and <a href="http://www.msnbc.msn.com/id/26315908/">The Rachel Maddow Show</a>. If you'd like to know more, follow me on <a href="http://www.twitter.com/timnovinger" title="Follow me on Twitter!">Twitter</a> and find out in real-time.</p>
					
					<div class="floatright">
						<h3><a href="http://www.linkedin.com/in/timnovinger/">I'm available for hire. View my work experience</a> &rarr;</h3>
					</div>
				</div>
				
				<div id="recent_work">
					<h2>Recent Work</h2>
					<hr />
					<ul>
						<li class="img_frame frame_small">
							<a href="portfolio/rockford_ambulance" title="Rockford Ambulance">
								<img src="images/portfolio/thumbnails/rockford_ambulance_home.jpg" alt="Rockford Ambulance" width="220" height="180" />
							</a>
						</li>
						<li class="img_frame frame_small">
							<a href="portfolio/screaming_monkeys_web_guild" title="The Screaming Monkeys Web Guild">
								<img src="images/portfolio/thumbnails/smwg.jpg" alt="screaming_monkeys_web_guild" width="220" height="180" />
							</a>
						</li>
						<li class="img_frame frame_small">
							<a href="portfolio/grace_water_study" title="Grace College Water Quality Project">
								<img src="images/portfolio/thumbnails/grace.jpg" alt="grace_water_quality" width="220" height="180" />
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		
<?php 
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	require_once('src/php/bottom.inc.php'); 
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>