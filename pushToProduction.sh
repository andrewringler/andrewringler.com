#!/bin/bash

# copy andrewringler-wp-theme to andrewringler.com overwriting previous
# to ensure that we don't have old template files being served up
/usr/bin/rsync --delete -avz -e ssh andrewringler-wp-theme andrewringler.com:/home/andrewringler/andrewringler.com/www/wp/wp-content/themes/
