# config valid for current version and patch releases of Capistrano
lock "~> 3.10.1"

set :application, 'myapp2'
set :repo_url, 'git@github.com:DeployCMF/capdrupal.git'
set :user, "nadir"
set :group, "nadir"
set :runner_group, "nadir"
set :domain, "http://192.168.43.244"
set :deploy_to, "/var/www/html"
set :linked_files, %w{web/sites/default/settings.php}
set :app_path, "drupal"
set :shared_children, ['drupal/sites/default/files']
set :shared_files, ['drupal/sites/default/settings.php'] 
set :download_drush, true
set :scm, "git"
set :branch, "master"


set :use_sudo, true
set :log_level, :debug



namespace :deploy do
after :finishing, 'drupal:composer:update'
after :finishing, 'drupal:server:chowndir'
end
