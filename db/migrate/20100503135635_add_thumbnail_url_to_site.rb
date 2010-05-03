class AddThumbnailUrlToSite < ActiveRecord::Migration
  def self.up
    add_column :sites, :thumbnail_url, :text
  end

  def self.down
    remove_column :sites, :thumbnail_url
  end
end
