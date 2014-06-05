namespace :deploy do
  task :copy_staging_config do
    puts "hello"
    run "cp -f #{release_path}/config/recipes/templates/wp-config-staging.php #{release_path}/wp-config.php"
  end
end
