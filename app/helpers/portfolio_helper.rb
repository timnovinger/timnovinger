# Methods added to this helper will be available to the portfolio templates in the application.
module PortfolioHelper

    def navLinks
        a = controller.action_name.underscore
        
        if a != "index"
          #change underscores to spaces and capitalize words in string
          "#{a}".gsub(/_/, ' ').gsub(/^[a-z]|\s+[a-z]/) { |a| a.upcase } + " "
        end
    end
    
    
#    function navLinks($prev='#', $next='#')
#    {
#    	return '<ul id="portfolio_nav">
#    				<li><a href="portfolio" title="View All">
#    					<img src="images/icons/bttn_grid.png" alt="portfolio" width="26" height="21" />
#    				</a></li>
#    				
#    				<li><a href="portfolio/'.$prev.'" title="'.ucwords(str_replace('_', ' ', $prev)).'">
#    					<img src="images/icons/bttn_prev.jpg" alt="previous" width="20" height="21" />
#    				</a></li>
#    				
#    				<li><a href="portfolio/'.$next.'" title="'.ucwords(str_replace('_', ' ', $next)).'">
#    					<img src="images/icons/bttn_next.jpg" alt="next" width="20" height="21" />
#    				</a></li>
#    			</ul>
#    	';
#    }

end