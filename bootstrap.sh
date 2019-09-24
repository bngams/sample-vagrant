#!/usr/bin/env bash

apt-get update

apt-get install -y apache2

if ! [ -L /var/www ]; then #check if a file exists and is a symbolic link
rm -rf /var/www
ln -fs /vagrant /var/www

fi