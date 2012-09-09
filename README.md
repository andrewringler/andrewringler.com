# Description

A wordpress theme for andrewringler.com and a custom Virtualbox / Vagrant / Librarian / Chef setup for WordPress development. 
This is a work in progress and you probably have no reason at all to be here if you are not me :)

## Getting Started as a Developer

* install https://www.virtualbox.org/
* install http://vagrantup.com/
* install https://rvm.io/, then
    
    > rvm install 1.9.3
    
    > rvm use 1.9.3
* install some gems:
   
    > gem update    

    > gem install librarian  // librarian for Vagrant (https://github.com/applicationsonline/librarian)
    
    > gem install compass    // COMPASS for scss compilation (http://compass-style.org/)
* vagrant up
* visit http://192.168.33.20/ and create a wordpress admin user
* delete hello world post
* export wordpress content from andrewringler.com
* import into wordpress at http://192.168.33.20/
* activate 'Andrew Ringler 2012' theme
* generate CSS
    
    > cd andrewringler-wp-theme/library/scss 
    
    > compass watch
    
## things I haven't automated yet, after vagrant up for the first time do:

    to enable PHP debug:
    > vagrant ssh
    > put a .htaccess file in /var/www/wordpress with:
      # Displaying PHP errors
      php_flag display_errors on
      php_value error_reporting 6143    
    > chmod 644 .htaccess

## Inspirations / References

* https://github.com/lewg/wordpress-vagrant
* https://github.com/applicationsonline/librarian

## TODO

* Only load goodreads-widget.css when associated widget is present
* Shorter timeout on goodreads rss feed reading, before resorting to cached version
* Replace COMPASS watch script with a custom
    
    https://github.com/h5bp/node-build-script
    
    or https://github.com/cowboy/grunt
    
    or http://forge.thethemefoundry.com/
    
* Should probably switch to twentytwelve when it comes out with WP 3.5
* Deploy to production with Capistrano?
https://github.com/augustash/capistrano-ash/wiki/WordPress-Shared-Hosting-Example
http://wiki.dreamhost.com/Capistrano