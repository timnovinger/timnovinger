class Site < ActiveRecord::Base
  default_scope :order => "position DESC"
  validates_presence_of :title, :slug, :position, :thumbnail_url, :body, :assets_html, :seo_keywords, :seo_description
end