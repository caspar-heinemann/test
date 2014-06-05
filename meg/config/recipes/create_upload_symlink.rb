namespace :deploy do
   task :create_upload_symlink do
      run "rm -rf #{release_path}/wp-content/uploads && ln -s #{shared_path}/uploads #{release_path}/wp-content/uploads"
   end
end
