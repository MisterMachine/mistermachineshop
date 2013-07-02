# Custom deployment namespace
namespace :shared do
  desc "Symlinking files"
  task :make_symlinks, :roles => :app do
    run "ln -nfs #{shared_path}/uploads #{release_path}/application/wp-content/uploads"
    run "ln -nfs #{shared_path}/env.php #{release_path}/application/env.php"
  end
end