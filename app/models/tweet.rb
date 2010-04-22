class Tweet < ActiveRecord::Base
  def self.latest_text
    if Tweet.first.created_at < 5.minute.ago
      begin
        Tweet.delete_all
        
        httpauth = Twitter::HTTPAuth.new(ENV['TWITTER_USR'], ENV['TWITTER_PWD'])
          client = Twitter::Base.new(httpauth)
          
        client.user_timeline.each do |tweet|
          Tweet.create :text => tweet.text
        end
      end
    end
    Tweet.first.text
  end
end