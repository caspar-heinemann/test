namespace :deploy do
  task :copy_production_config do
    run "cp -f #{release_path}/config/recipes/templates/wp-config.php #{release_path}"
  end
  after "deploy:upload", "deploy:copy_production_config"
end
