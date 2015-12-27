# Description
My Wordpress theme for andrewringler.com

Contact me at [public@andrewringler.com](mailto:public@andrewringler.com "public@andrewringler.com")

## Getting Started as a Developer
* install https://www.virtualbox.org/
* install http://vagrantup.com/

`vagrant up`

* visit http://192.168.33.10/ and http://192.168.33.10/wp-admin/, user: admin, pass: admin
* delete default posts and pages
* export Wordpress content from andrewringler.com to exports
* import db backup XML to local install
  
    vagrant ssh
    wp plugin install /vagrant/plugins/WordPress-Importer-master.zip
    wp plugin activate WordPress-Importer-master
    wp wxr-importer import /vagrant/exports/andrewringler_EXPORTFILE_.xml
    wp plugin deactivate WordPress-Importer-master

* activate 'Andrew Ringler 2015' theme
* setup menus and widgets
    

## TODO
* post thumbnails    
* Should look over h5bp .htaccess file, decide what features I want to pull into andrewringler.com
* static.andrewringler.com for serving up image assets
