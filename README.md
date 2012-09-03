# Description

A wordpress theme for andrewringler.com and a custom Virtualbox / Vagrant / Librarian / Chef setup for WordPress development. 
This is a work in progress and you probably have no reason at all to be here if you are not me :)

## Getting Started as a Developer

* install https://www.virtualbox.org/
* install http://vagrantup.com/
* install https://rvm.io/, then
    
    > rvm install 1.9.3
    
    > rvm use 1.9.3
    
* install librarian: gem install librarian   (https://github.com/applicationsonline/librarian)
* vagrant up
* visit http://192.168.33.20/ and create a wordpress admin user
* delete hello world post
* export wordpress content from andrewringler.com
* import into wordpress at http://192.168.33.20/
* activate andrewringler theme
* install https://github.com/creationix/nvm, then

    > nvm install v0.8.8
    
    > nvm use v0.8.8
* then generate CSS

    > node watch.js

## Inspirations / References

* https://github.com/lewg/wordpress-vagrant
* https://github.com/applicationsonline/librarian
* https://github.com/corpix/watcherDemo, http://stackoverflow.com/questions/9421375/how-to-use-less-js-with-node-js-to-watch-less-files-in-a-folder

## TODO

* Replace custom watch script with a custom https://github.com/h5bp/node-build-script or https://github.com/cowboy/grunt