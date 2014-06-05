load "config/recipes/set_staging_config"
load "config/recipes/create_upload_symlink"
load "config/recipes/delete_nginx_cache"
after "deploy:update_code", "deploy:create_upload_symlink"
after "deploy:update_code", "deploy:copy_staging_config"
after "deploy:update_code", "deploy:delete_nginx_cache"

set :application, "meg_website_de_staging"
set :repository,  "git@github.com:mobileeventguide/meg-website-de.git"

set :scm, :git
set :branch, :staging

set :keep_releases, 5

role :web, "wordpress.event.gd"
role :app, "wordpress.event.gd"

after "deploy:restart", "deploy:cleanup"

# file paths
set :deploy_via, :remote_cache
set :deploy_to, "/srv/runner/#{application}"

# user on the server
set :user, "runner"
set :use_sudo, false
