module ApplicationHelper
  def page_title
    a = controller.action_name.underscore

    #change underscores to spaces and capitalize words in string
    "#{a}".gsub(/_/, ' ').gsub(/^[a-z]|\s+[a-z]/) { |a| a.upcase } + ' ::' unless a == 'index'
  end

  def bodytag_id
    #change underscores to spaces and capitalize words in string
    "#{controller.action_name.underscore}".gsub(/_/, '-')
  end

  def latest_tweet
    Tweet.latest
  end

  def message_with_anchors(message)
    message.gsub!(/(https?:\/\/([\w\.]+)+(:\d+)?(\/([\w\/_\.]*(\?\S+)?)?)?)/, '<a href="\\1">\\1</a>')
    message.gsub!(/\@([\w\.]+)/, '<a href="http://twitter.com/\\1">@\\1</a>')
  end
end

