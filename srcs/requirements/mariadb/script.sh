#!/bin/bash

# Substitute environment variables in init.sql
sed -i "s/WORDPRESS_DATABASE/$DB_NAME/g" /etc/mysql/init.sql
sed -i "s/WORDPRESS_USER/$DB_USER/g" /etc/mysql/init.sql
sed -i "s/WORDPRESS_PASS/$DB_PASS/g" /etc/mysql/init.sql

# Initialize the MariaDB data directory and start the server
mysql_install_db
mysqld --init-file=/etc/mysql/init.sql
