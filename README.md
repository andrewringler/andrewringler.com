# Description

A wordpress theme for andrewringler.com and a custom Virtualbox / Vagrant / Librarian / Chef setup for WordPress development. 
This is a work in progress and you probably have no reason at all to be here if you are not me :)

Contact me at [public@andrewringler.com](mailto:public@andrewringler.com "public@andrewringler.com")

## Getting Started as a Developer

* install https://www.virtualbox.org/
* install http://vagrantup.com/

install https://rvm.io/, then
    
	rvm install 1.9.3
    rvm use 1.9.3

install some gems:
   
	gem update
    gem install librarian  // librarian for Vagrant (https://github.com/applicationsonline/librarian)`
    gem install compass    // COMPASS for scss compilation (http://compass-style.org/)
    
`vagrant up`

Download some plugins

	vagrant ssh
	sudo chown -R www-data /var/www/wordpress/
	sudo apt-get install unzip
	cd /var/www/wordpress/wp-content/plugins
	sudo wget https://downloads.wordpress.org/plugin/wordpress-importer.0.6.1.zip
	sudo unzip wordpress-importer.0.6.1.zip
	sudo chown nobody:nogroup wordpress-importer


* visit http://192.168.33.20/ and create a wordpress admin user
* delete hello world post
* export wordpress content from andrewringler.com
* import into wordpress at http://192.168.33.20/
* activate 'Andrew Ringler 2013' theme
* setup menus and widgets
* generate CSS
    
    > cd andrewringler-wp-theme/library/scss 
    
    > compass watch
    
## Some things I haven't automated yet, after vagrant up for the first time do:

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
* post thumbnails
* Replace COMPASS watch script with a custom
    
    https://github.com/h5bp/node-build-script
    
    or https://github.com/cowboy/grunt
    
    or http://forge.thethemefoundry.com/
    
* Should look over h5bp .htaccess file, decide what features I want to pull into andrewringler.com
* static.andrewringler.com for serving up image assets
