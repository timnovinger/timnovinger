# Methods added to this helper will be available to the portfolio templates in the application.
module PortfolioHelper
    def format_alt (text)
       "#{text}".gsub(/-/, ' ').gsub(/^[a-z]|\s+[a-z]/) { |text| text.upcase }
    end

    def nav_links (url_prev, url_next)
      alt_prev = format_alt url_prev
      alt_next = format_alt url_next

      links = "<ul id=\"portfolio_nav\">
                  <li>
                    <a href=\"/portfolio\" title=\"View All\">
                      <img src=\"/assets/icons/bttn_grid.png\" alt=\"portfolio\" width=\"26\" height=\"21\" />
                    </a>
                  </li>

                  <li>
                    <a href=\"/portfolio/"+ url_prev +"\" title=\""+ alt_prev +"\">
                      <img src=\"/assets/icons/bttn_prev.jpg\" alt=\""+ alt_prev +"\" width=\"20\" height=\"21\" />
                    </a>
                  </li>

                  <li>
                    <a href=\"/portfolio/"+ url_next +"\" title=\""+ alt_next +"\">
                      <img src=\"/assets/icons/bttn_next.jpg\" alt=\""+ alt_next +"\" width=\"20\" height=\"21\" />
                    </a>
                  </li>
                </ul>"
      links.html_safe
    end
end
