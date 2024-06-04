#!/bin/bash

# Use environment variable substitution with sed (less recommended approach)
sed -i "s/wordpress_database/$DB_NAME" /etc/mysql/init.sql && \
  sed -i "s/wordpress_Hama/$DB_USER" /etc/mysql/init.sql && \
  sed -i "s/pass/$DB_PASS" /etc/mysql/init.sql

mysql_install_db
mysqld

