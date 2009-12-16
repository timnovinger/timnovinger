# Methods added to this helper will be available to the portfolio templates in the application.
module PortfolioHelper

    def formatAlt (text)
       "#{text}".gsub(/-/, ' ').gsub(/^[a-z]|\s+[a-z]/) { |text| text.upcase }
    end
    
    
    def navLinks (urlPrev, urlNext)
      altPrev = formatAlt urlPrev
      altNext = formatAlt urlNext
       
      links = "<ul id=\"portfolio_nav\">
         			      <li>
         			        <a href=\"/portfolio\" title=\"View All\">
                        <img src=\"/images/icons/bttn_grid.png\" alt=\"portfolio\" width=\"26\" height=\"21\" />
                      </a>
                    </li>

                    <li>
                      <a href=\"/portfolio/"+ urlPrev +"\" title=\""+ altPrev +"\">
                        <img src=\"/images/icons/bttn_prev.jpg\" alt=\""+ altPrev +"\" width=\"20\" height=\"21\" />
                      </a>
                    </li>

                    <li>
                      <a href=\"/portfolio/"+ urlNext +"\" title=\""+ altNext +"\">
                        <img src=\"/images/icons/bttn_next.jpg\" alt=\""+ altNext +"\" width=\"20\" height=\"21\" />
                      </a>
                    </li>
                </ul>"
    end
    
end