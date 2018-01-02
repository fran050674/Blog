@servers(['blog' => 'admin@37.187.109.143'])

@task('deploy', ['on' => 'blog'])
    cd /home/admin/projects
    git pull origin master
    composer install
@endtask