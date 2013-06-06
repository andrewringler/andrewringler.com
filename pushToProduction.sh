#!/bin/sh

E_BADARGS=85
if [ $# != 2 ]
	then
	  PROG_NAME=`basename $0`
	  echo "$PROG_NAME: requires 2 parameters"
	  echo "usage: $PROG_NAME <hostname> <remote-path-to-wordpress-dir>"
	  exit $E_BADARGS
	fi
	
HOST=$1
WP_DIR=$2
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