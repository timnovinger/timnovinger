# Methods added to this helper will be available to the portfolio templates in the application.
module PortfolioHelper

    def formatAlt (text)
       "#{text}".gsub(/-/, ' ').gsub(/^[a-z]|\s+[a-z]/) { |text| text.upcase }
    end
    
    
    def navLinks (p, n)
      altP = formatAlt p
      
      altN = formatAlt n
       
      links = "<ul id=\"portfolio_nav\">
         			<li><a href=\"/portfolio\" title=\"View All\">
         				<img src=\"/images/icons/bttn_grid.png\" alt=\"portfolio\" width=\"26\" height=\"21\" />
         			</a></li>
         			
         			<li><a href=\"/portfolio/"+ p +"\" title=\""+ altP +"\">
         				<img src=\"/images/icons/bttn_prev.jpg\" alt=\""+ altP +"\" width=\"20\" height=\"21\" />
         			</a></li>
         			
         			<li><a href=\"/portfolio/"+ n +"\" title=\""+ altN +"\">
         				<img src=\"/images/icons/bttn_next.jpg\" alt=\""+ altN +"\" width=\"20\" height=\"21\" />
         			</a></li>
      		   </ul>"
    end
    
end