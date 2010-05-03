class Admin::SitesController < ApplicationController
  layout 'admin'
  
  def index
    @sites = Site.all
  end
  
  def show
    @site = Site.find_by_id params['id']
  end
  
  def create
    @site = Site.new params['site']
    if @site.save
      redirect_to admin_site_path @site
    else
      flash[:error] = 'Uh oh. Something is wrong here.'
      render :new
    end
  end
  
  def edit
    @site = Site.find_by_id params['id']
  end
  
  def update
    @site = Site.update(params['id'], params['site'])
    if @site.save
      redirect_to admin_sites_path
    else
      flash[:error] = 'Uh oh. Something is wrong here.'
      render :edit
    end
  end
  
  def destroy
    site = Site.find_by_id params['id']
    site.destroy
    redirect_to admin_sites_path
  end
end