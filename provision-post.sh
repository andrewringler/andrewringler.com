#!/usr/bin/env bash

ln -s /vagrant/andrewringler-wp-theme /var/www/wordpress/wp-content/themes/

# wait for Wordpress to actually boot up
sleep 30

/usr/local/bin/wp option update posts_per_page 500
/usr/local/bin/wp option update blogname "Andrew Ringler"
/usr/local/bin/wp user create andrew public@andrewringler.com --role=administrator --user_pass=andrew
/usr/local/bin/wp theme activate andrewringler-wp-theme
