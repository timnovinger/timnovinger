class PortfolioController < ApplicationController
  layout "public"
  
  def portfolio
    @keywords = "portfolio, work samples, consulting, samples, examples, Tim Novinger, graphic design, graphic, design, freelance, fort wayne, indiana, development, mootools, twitter, mootools, jquery, iphone, ruby, rails, ruby on rails, RoR, screaming monkeys web guild, javascript, php, mysql, developer, advertising, web, print"
    @description = "The portfolio of Tim Novinger. View samples of my web development work."
  end
  
  def rockford_ambulance
    @keywords = "Rockford, Ambulance, rails, literacy 5, html, css, consulting, theme, github, source, code, version, control, Tim Harvey"
    @description = "Portfolio :: Example :: Rockford Ambulance" 
  end
  
  def maestronance
    @keywords = "Maestro Robert Nance, rails, mootools, literacy 5, html, css, consulting, theme, github, source, code, version, control, Tim Harvey"
    @description = "Portfolio :: Example :: Maestro Robert Nance" 
  end
  
  def screaming_monkeys_web_guild
    @keywords = "Screaming, Monkeys, Web, Guild, mootools, admin, professional, group, founder, html, css, jquery, theme"
    @description = "Portfolio :: Example :: Screaming Monkeys Web Guild" 
  end
  
  def screaming_monkeys_web_guild_version_2
    @keywords = "Screaming, Monkeys, Web, Guild, mootools, admin, professional, group, founder, html, css, jquery, theme"
    @description = "Portfolio :: Example :: Screaming Monkeys Web Guild - Version 2" 
  end
  
  def grace_water_study
    @keywords = "grace, college, water, study, program, project, warsaw, indiana, web, site, development, develop, nichols, company"
    @description = "Portfolio :: Example :: Grace College Water Study Project" 
  end
  
  def nichols_admin
    @keywords = "Nichols, Company, mootools, admin, html, css, mootools, php, content, management, system, theme"
    @description = "Portfolio :: Example :: Nichols Company Admin (CMS)" 
  end
  
  def nichols_client_gallery
    @keywords = "Nichols, Company, client, photo, photoshoot, photography, gallery, mootools, admin, html, css, mootools, php, content, management, system, theme"
    @description = "Portfolio :: Example :: Nichols Company Client Gallery" 
  end
  
  def andorfer_commons
    @keywords = "andorfer, commons, indiana, institute, tech, technology, css, mootools, php, content, management, system, theme"
    @description = "Portfolio :: Example :: Andorfer Commons" 
  end
  
  def westlake_design_comp_one
    @keywords = "Westlake Design, fishers, carmel, indianapolis, indiana, web, site, design, example one"
    @description = "Portfolio :: Example :: Westlake Design, Site Design Comp One" 
  end
  
  def westlake_design_comp_two
    @keywords = "Westlake Design, fishers, carmel, indianapolis, indiana, web, site, design, example two"
    @description = "Portfolio :: Example :: Westlake Design, Site Design Comp two" 
  end
  
  def jh_specialty
    @keywords = "JH Specialty, fort wayne, indiana, development, develop, web, design"
    @description = "Portfolio :: Example :: JH Specialty, Inc." 
  end
  
  def any_web_dev
    @keywords = "JH Specialty, Any Web Dev, fort wayne, indiana, development, develop, web, design"
    @description = "Portfolio :: Example :: Any Web Dev"
  end
end