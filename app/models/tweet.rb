class Tweet < ActiveRecord::Base    
  def self.fetch_new
    # Instantiate OAUTH consumer
    oauth = Twitter::OAuth.new(ENV['OAUTH_CONSUMER_TOKEN'], ENV['OAUTH_CONSUMER_SECRET'])
    oauth.authorize_from_access(ENV['OAUTH_ACCESS_TOKEN'], ENV['OAUTH_ACCESS_SECRET'])
    
    # Connect to Twitter using OAUTH consumer
    client = Twitter::Base.new(oauth)
    
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
