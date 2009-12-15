<?php
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// PULL IN LATEST TWEET
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	require_once('gagawa-1.0.inc.php'); 
	require_once('JSON.inc.php'); 
	require_once('TwitterCacher.inc.php');
	
	$JSON = new Services_JSON();

	$tc = new TwitterCacher("timnovinger","kinseyisabrat");
	$tc->setUserAgent("Mozilla/5.0 (compatible; TwitterCacher/1.0; +http://www.kolich.com)");
	
	$timeline = $JSON->decode( $tc->getUserTimeline() );
	$count = 1;
	
	if(!empty($timeline))
	{ 
		foreach( $timeline as $tweet ) 
		{
			if($count === 1)
			{
			
				$text = $tweet->text;
				$date = date('M j, Y @ h:i A',
						strtotime($tweet->created_at));
				$source = $tweet->source;
			
				// Turn links into links
				$text = eregi_replace('(((f|ht){1}tp://)[-a-zA-Z0-9@:%_\+.~#?&//=]+)', '<a href="\\1">\\1</a>', $text); 
			
				// Turn twitter @username into links to the users Twitter page
				$text = eregi_replace('@([-a-zA-Z0-9_]+)', '<a href="http://twitter.com/\\1">@\\1</a>', $text); 
				
				// Format Tweet
				$TWEET = '<p>'.$text.'<br /><small>'.$date.'</small></p>';
			}
			$count += 1;
		}
	} 
	else 
	{
		$TWEET = '<p>OMG TWITTER IS DOWN!!</p>';
	}
	
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// CREATE PORTFOLIO LINKS
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	function navLinks($prev='#', $next='#')
	{
		return '<ul id="portfolio_nav">
					<li><a href="portfolio" title="View All">
						<img src="images/icons/bttn_grid.png" alt="portfolio" width="26" height="21" />
					</a></li>
					
					<li><a href="portfolio/'.$prev.'" title="'.ucwords(str_replace('_', ' ', $prev)).'">
						<img src="images/icons/bttn_prev.jpg" alt="previous" width="20" height="21" />
					</a></li>
					
					<li><a href="portfolio/'.$next.'" title="'.ucwords(str_replace('_', ' ', $next)).'">
						<img src="images/icons/bttn_next.jpg" alt="next" width="20" height="21" />
					</a></li>
				</ul>
		';
	}
?>