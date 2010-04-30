class Admin::SitesController < ApplicationController
  layout 'admin'
  
  def index
    @sites = Site.all
  end

  def show
    @site = Site.find_by_id params['id']
  end

  def new
  end

  def create
    @site = Site.new params['site']
    if @site.save
      redirect_to admin_site_path @site
    else
      flash[:error] = 'Oh SNAP!'
      render :new
    end
  end

  def edit
    @site = Site.find_by_id params['id']
  end

  def update
  end

  def destroy
    site = Site.find_by_id params['id']
    site.destroy
    redirect_to admin_sites_path
  end
end