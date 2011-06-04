class HomeController < ApplicationController
  layout "public"

  def index
    @keywords = "Tim Novinger, consulting, graphic design, graphic, design, freelance, fort wayne, indiana, development, mootools, twitter, mootools, jquery, iphone, ruby, rails, ruby on rails, RoR, screaming monkeys web guild, javascript, php, mysql, developer, advertising, web, print, iOS, mobile notifier, peter hajas, jailbreak, objective-c, apple"
    @description = "A developer in Fort Wayne, Indiana experienced in web development and design, and interests in iOS development."
  end
end
