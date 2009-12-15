<?php
	
	$quotes = array(
	
				"Sometimes people ask me what I'm capable of.<br />
				&mdash;each time I answer with the question&mdash;<q>&ldquo;What do you <em>need</em>?&rdquo;</q>",
	
				"<q>&ldquo;Tim did a stellar job of providing a design layout and chopping it up with CSS. His attention to detail and quality of work made the development side of the project a breeze.&rdquo;</q>&mdash;Brian Lewandowski",
				
				"<q>&ldquo;Tim impressed me immediately with his attention to my project schedules and proactive follow up. On the day I was to present a site Tim contributed to, he called one last time to make sure everything was as I needed it.&rdquo;</q>&mdash;Tim Harvey, <a href='http://www.literacy5.com'>Literacy 5</a> &rarr;",
				 
				"<q>&ldquo;He's become the first resource I turn to when I need support on a web development or design project.&rdquo;</q>&mdash;Tim Harvey, <a href='http://www.literacy5.com'>Literacy 5</a> &rarr;",
				
				"<q>&ldquo;Tim's work is timely, creative and well-structured. His knowledge and observance of web standards is top-notch which makes his work exceptionally easy to integrate into larger projects.&rdquo;</q><br />&mdash;Jerry Richardson, <a href='http://www.disruptiveventures.com'>Disruptive Ventures</a> &rarr",
				
				"<q>&ldquo;I wouldn't hesitate to take any web project to him, if only to get his professional opinion of the intended plan-of-attack. Solid developer, highly recommended.&rdquo;</q>&mdash;Ryan Imel, <a href='http://www.aspiringindie.com'>Aspiring Indie</a> &rarr"
	
			  );
	
	$key = array_rand($quotes);
	
	echo $quotes[$key];
?>
