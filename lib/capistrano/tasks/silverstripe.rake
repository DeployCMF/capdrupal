namespace :drupal do
namespace :composer do
desc 'Run Composer update'
task :update do
on roles(:web) do
within release_path do
execute :php, "-d allow_url_fopen=on composer.phar update"
end
end
end
end


namespace :server do
desc 'Run Chown dir'
task :chowndir do
on roles(:web) do
within fetch(:root_dir) do

execute :chown, "-R nadir:nadir /var/www/html"
end
end
end
end
end


