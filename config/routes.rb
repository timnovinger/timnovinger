ActionController::Routing::Routes.draw do |map|
  map.root   :controller => "home"
  
  map.namespace :admin do |admin|
    admin.resources :sites
  end
  
  map.portfolio   "/portfolio",   :controller => "portfolio",   :action => "portfolio"
  map.portfolio ":controller/:action"
end