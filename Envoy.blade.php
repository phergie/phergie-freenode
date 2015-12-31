@servers(['prod' => 'username@yourserver.tld'])

@task('deploy:prod', ['on' => 'prod'])
cd /home/path/to/phergie-freenode
git pull origin master
composer install
sudo service phergie restart
@endtask
