#!/bin/sh

HOST=andrewringler.com
WP_DIR=/home/andrewringler/andrewringler.com/www/wp
THEME_LOCAL=andrewringler-wp-theme/
THEME_REMOTE="$WP_DIR/wp-content/themes/"
FAVICON_LOCAL="andrewringler-wp-theme/favicon.ico"
FAVICON_REMOTE="$WP_DIR/"

SCP_THEME="scp -r $THEME_LOCAL $HOST:$THEME_REMOTE"
SCP_FAVICON="scp $FAVICON_LOCAL $HOST:$FAVICON_REMOTE"

echo $SCP_THEME
echo $SCP_FAVICON

read -p "Run above commands <y/n>? " -n 1 -r
if [[ $REPLY =~ ^[Yy]$ ]]
then
	echo
	`$SCP_THEME`
	`$SCP_FAVICON`
	echo "Success"
else
	echo
	echo "Canceled"
fi
