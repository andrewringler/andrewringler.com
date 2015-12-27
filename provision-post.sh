#!/usr/bin/env bash

ln -s /vagrant/andrewringler-wp-theme /var/www/wordpress/wp-content/themes/

wp option update posts_per_page 500
wp option update blogname "Andrew Ringler"
wp user create andrew public@andrewringler.com --role=administrator --user_pass=andrew
