class Tweet < ActiveRecord::Base
  def self.latest_text
    if Tweet.first.nil? || Tweet.first.created_at < ENV['CACHE_TIMEOUT'].to_i.minute.ago
      begin
        httpauth = Twitter::HTTPAuth.new(ENV['TWITTER_USR'], ENV['TWITTER_PWD'])
          client = Twitter::Base.new(httpauth)
        
        Tweet.delete_all
        
        client.user_timeline.each do |tweet|
          Tweet.create :text => tweet.text
        end
      end
    end
    Tweet.first.nil? ? 'Could not connect to Twitter' : Tweet.first.text
  end
end