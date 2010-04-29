class Tweet < ActiveRecord::Base    
  def self.fetch_new
    # attempt to connect and authenticate to Twitter
    httpauth = Twitter::HTTPAuth.new(ENV['TWITTER_USR'], ENV['TWITTER_PWD'])
    client   = Twitter::Base.new(httpauth)  
    
    # fetch a new tweet, cache it to the database, and then return it
    Tweet.create :text => client.user_timeline.first.text
    client.user_timeline.first.text
    
    rescue Twitter::Unauthorized
      'Could not connect to Twitter.'
    rescue Twitter::RateLimitExceeded
      'Hourly rate limit exceeded.'
  end
  
  # return cached tweet unless cache empty or expired else fetch new
  def self.latest
    cached = Tweet.first
    
    case true
      when cached.nil?
        Tweet.fetch_new
      when cached.created_at < ENV['CACHE_TIMEOUT'].to_i.minute.ago
        Tweet.delete_all
        Tweet.fetch_new
      else
        cached.text
    end
  end
end