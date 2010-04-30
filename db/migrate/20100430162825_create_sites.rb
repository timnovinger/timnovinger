class CreateSites < ActiveRecord::Migration
  def self.up
    create_table :sites do |t|
      t.string :title
      t.text :body
      t.integer :position
      t.string :site_url
      t.string :twitter_url
      t.text :assets_html
      t.text :seo_keywords
      t.text :seo_description
      t.date :publish_on

      t.timestamps
    end
  end

  def self.down
    drop_table :sites
  end
end
