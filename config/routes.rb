Timnovinger::Application.routes.draw do
  match 'portfolio', :to => 'portfolio#portfolio'
  match ':controller(/:action)'
  root :to => 'home#index'
end
