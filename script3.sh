#!/usr/bin/bash

a2enmod rewrite

mkdir /var/www/anything.com
cp -r index.php /var/www/anything.com
cp -r index1.php /var/www/anything.com
cp -r anything.conf /etc/apache2/sites-available
cat htaccess1 > /var/www/anything.com/.htaccess
echo "127.0.0.1 anything.com" >> /etc/hosts


a2dissite 000-default.conf
a2ensite anything.conf
service apache2 restart
