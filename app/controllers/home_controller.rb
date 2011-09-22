class HomeController < ApplicationController
  layout "public"

  def index
    @keywords = "Tim Novinger, consulting, graphic design, graphic, design, freelance, fort wayne, indiana, development, mootools, twitter, mootools, jquery, iphone, ruby, rails, ruby on rails, RoR, screaming monkeys web guild, javascript, php, mysql, developer, advertising, web, print, iOS, mobile notifier, peter hajas, jailbreak, objective-c, apple"
    @description = "A developer located in Fort Wayne, Indiana focused primarily on web development, who hacks around on iOS development for fun."
  end
end
