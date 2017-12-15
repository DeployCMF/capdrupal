# config valid for current version and patch releases of Capistrano
lock "~> 3.10.1"


set :application, 'myapp2'
set :repo_url, 'git@github.com:DeployCMF/capdrupal.git'
set :user, "www-data"
set :group, "www-data"
set :runner_group, "www-data"
set :domain, "http://172.17.0.1"
set :deploy_to, "/var/www/html"
set :linked_files, %w{web/sites/default/settings.php}
set :app_path, "drupal"
set :shared_children, ['drupal/sites/default/files']
set :shared_files, ['drupal/sites/default/settings.php'] 
set :download_drush, true
set :scm, "git"
set :branch, "master"
namespace :deploy do
after :finishing, 'drupal:composer:update'
after :finishing, 'drupal:server:chowndir'
end
