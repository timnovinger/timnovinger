<?php 
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
	require_once('../src/php/functions.inc.php');
	
	$title = 'Work Samples';
	$description = 'Welcome to the portfolio of Tim Novinger, a web developer in Fort Wayne, Indiana. View my work samples.';
	
	//declare variables
	$pulled_page = false;
	$keyword = '';
	$extra = ''; 
	
	//check if requested file exists and load, else 404 it
	if(!empty($_GET['page']))
	{
		$uri = '../portfolio/'.$_GET['page'].'.php';
		
		if(file_exists($uri))
		{
			$pulled_page = true;
			$keyword = ucwords(str_replace('_', ' ', $_GET['page']));
			$extra = $keyword.', ';
			$title = $keyword;
			$description = 'Portfolio :: Example :: '.$keyword;
		} 
		else 
		{
			header("Location: 404.php");
			exit();
		}
	}
	
	
	$keywords = $extra.'portfolio, clients, clientele, projects, Tim Novinger, graphic design, graphic, design, freelance, fort wayne, indiana, development, mootools, twitter, mootools, jquery, iphone, ruby, rails, ruby on rails, RoR, screaming monkeys web guild, javascript, php, mysql, developer, advertising, web, print';
	
	
	require_once('../src/php/top.inc.php');
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
		<div id="content">
			<?php
				if($pulled_page)
				{
					echo '<hr class="visible large" />';
					echo '<hr class="visible large" />';
					require_once($uri);
				}
				else
				{ 
			?>
			
			<p class="headline"><?php require_once('quotes.php'); ?></p>
						
			<hr class="visible large" />
			
			<ul class="grid">
				<li class="img_frame frame_small">
					<a href="portfolio/rockford_ambulance" title="Rockford Ambulance">
						<img src="images/portfolio/thumbnails/rockford_ambulance_home.jpg" alt="Rockford Ambulance" width="220" height="180" />
					</a>
				</li>
				<li class="img_frame frame_small">
					<a href="portfolio/maestronance" title="Maestro Robert Nance">
						<img src="images/portfolio/thumbnails/maestronance_inner.jpg" alt="Maestro Robert Nance" width="220" height="180" />
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
				<li class="img_frame frame_small">
					<a href="portfolio/nichols_admin" title="Nichols Administration System">
						<img src="images/portfolio/thumbnails/admin.jpg" alt="nichols_admin" width="220" height="180" />
					</a>
				</li>
				<li class="img_frame frame_small">
					<a href="portfolio/nichols_client_gallery" title="Nichols Client Gallery Application">
						<img src="images/portfolio/thumbnails/gallery.jpg" alt="nichols_client_gallery" width="220" height="180" />
					</a>
				</li>
				
				
				
				
				<li class="img_frame frame_small">
					<a href="portfolio/andorfer_commons" title="Andorfer Commons &mdash; Indiana Tech">
						<img src="images/portfolio/thumbnails/ac.jpg" alt="andorfer_commons" width="220" height="180" />
					</a>
				</li>
				<li class="img_frame frame_small">
					<a href="portfolio/westlake_design_comp_one" title="Westlake Design Site Comp One">
						<img src="images/portfolio/thumbnails/wd_1.jpg" alt="westlake_design_one" width="220" height="180" />
					</a>
				</li>
				<li class="img_frame frame_small">
					<a href="portfolio/westlake_design_comp_two" title="Westlake Design Site Comp Two">
						<img src="images/portfolio/thumbnails/wd_2.jpg" alt="westlake_design_two" width="220" height="180" />
					</a>
				</li>
				
				
				
				<li class="img_frame frame_small">
					<a href="portfolio/jh_specialty" title="JH Specialty, Inc. Site Comp">
						<img src="images/portfolio/thumbnails/jhs.jpg" alt="jh_specialty" width="220" height="180" />
					</a>
				</li>
				<li class="img_frame frame_small">
					<a href="portfolio/any_web_dev" title="AnyWebDev Site Comp &mdash; JH Specialty, Inc.">
						<img src="images/portfolio/thumbnails/AWD.jpg" alt="any_web_dev" width="220" height="180" />
					</a>
				</li>
			</ul>
			
			<hr class="visible large fatty" />
			
			<h3>The way I see it&mdash;</h3>
			<p>I'm somewhat of a rarity in this industry. At my core I'm a web developer&mdash;but unlike my peers I somehow developed a sense of design along the way which I use to compliment the code I write. In fact, I designed this very site along with most of those listed above.</p>
			
			<p>Don't get me wrong&mdash;I never claim to be purely a designer, and it's by no means my strongpoint. But give me enough time, coffee and inspiration and I'll mock up a pretty nice site.</p>
			
			<p>I've found that by having a sense of design, art and creativity&mdash;in addition to my programming ability&mdash;at the end of the day, I'm a more well rounded and <strong>better</strong> developer overall.</p>
			
			<p>It is this that I find to be the most beneficial quality of preferring nice looking things.</p>
			
			<?php 
				} 
			?>
		</div>	
<?php 
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	require_once('../src/php/bottom.inc.php'); 
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>