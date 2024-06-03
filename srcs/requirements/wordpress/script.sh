#!/bin/bash
cd /var/www/html
curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
chmod +x wp-cli.phar
echo $DB_HOST
echo $DB_USER
echo $DB_PASS
echo $DB_NAME
./wp-cli.phar core download --allow-root
./wp-cli.phar config create --dbname=$DB_NAME --dbuser=$DB_USER --dbpass=$DB_PASS --dbhost=$DB_HOST --allow-root
./wp-cli.phar core install --url=$WP_URL --title=$WP_TITLE --admin_user=$WP_USER --admin_password=$WP_PASS --admin_email=$WP_EMAIL --allow-root

php-fpm8.2 -F

