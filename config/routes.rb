ActionController::Routing::Routes.draw do |map|
  map.root   :controller => 'home'
  
  map.namespace :admin do |admin|
    admin.resources :sites
  end
  
  map.connect '/portfolio',   :controller => 'portfolio',   :action => 'index'
  map.connect '/portfolio/:title', :controller => 'portfolio', :action => 'show'
end