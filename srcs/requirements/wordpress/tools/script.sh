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
# Create an additional user (replace 'new_username' and 'new_user_email' with desired values)
./wp-cli.phar user create ${W_USER1} ${W_UEMAIL} --user_pass=${W_UPASS} --role=author

php-fpm8.2 -F

