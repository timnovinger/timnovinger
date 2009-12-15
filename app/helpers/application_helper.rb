# Methods added to this helper will be available to all templates in the application.
module ApplicationHelper

    def page_title
        a = controller.action_name.underscore
        
        if a != "index"
          #change underscores to spaces and capitalize words in string
          "#{a}".gsub(/_/, ' ').gsub(/^[a-z]|\s+[a-z]/) { |a| a.upcase } + " -"
        end
    end
    
    
    def bodytag_id
      a = controller.action_name.underscore
      
      #change underscores to spaces and capitalize words in string
      "#{a}".gsub(/_/, ' ')
    end

end