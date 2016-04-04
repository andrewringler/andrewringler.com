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
