#!/bin/bash

# Use environment variable substitution with sed (less recommended approach)
sed -i "s/WORDPRESS_DATABASE/$DB_NAME/g" /etc/mysql/init.sql && \
  sed -i "s/wordpress_Hama/$DB_USER/g" /etc/mysql/init.sql && \
  sed -i "s/pass/$DB_PASS/g" /etc/mysql/init.sql

mysql_install_db
mysqld

