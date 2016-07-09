# Description
My Wordpress theme for andrewringler.com

Contact me at [public@andrewringler.com](mailto:public@andrewringler.com "public@andrewringler.com")

## Getting Started as a Developer
* install https://www.virtualbox.org/
* install http://vagrantup.com/

`vagrant up`

* add to hosts file:
`192.168.33.10	andrewringler`

* visit http://andrewringler and http://andrewringler/wp-admin/, user: admin, pass: admin
* delete default posts and pages

### Import Db from andrewringler.com
First export Wordpress content from andrewringler.com to exports then:

    vagrant ssh
    wp plugin install /vagrant/plugins/WordPress-Importer-master.zip
    wp plugin activate WordPress-Importer-master
    wp wxr-importer import /vagrant/exports/andrewringler_EXPORTFILE_.xml
    wp plugin deactivate WordPress-Importer-master

### Activate Theme
* activate 'Andrew Ringler 2016' theme
* setup primary menu

### Settings
* change Settings > Reading > "Blog pages show at most" to 500
* change Settings > General > Site Tile to "Andrew Ringler"

### Plugins
* Advanced Custom Fields
* Force Regenerate Thumbnails

### TODO
* Performance:
  * Switch to W3 Total Cache, seems to support browser caching for images. Should minify CSS, JS too.
  * disable WP Minify, disable WP Super Cache
  * Switch to JS asynchronous loading of WebFonts
  * Switch all PNG image uploads to JPG
  * https://developers.google.com/speed/pagespeed/
