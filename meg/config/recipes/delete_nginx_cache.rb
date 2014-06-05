namespace :deploy do
  task :delete_nginx_cache do
    run "rm -rf /var/cache/nginx/*"
   end
end
