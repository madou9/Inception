FROM debian:latest

RUN apt update && apt upgrade -y && apt install -y mariadb-server

COPY 50-server.cnf /etc/mysql/mariadb.conf.d/.

COPY init.sql /etc/mysql/init.sql

# Use environment variable substitution with sed
RUN sed -i "s/WORDPRESS_DATABASE/$DB_NAME/g" /etc/mysql/init.sql && \
  sed -i "s/wordpress_Hama/$DB_USER/g" /etc/mysql/init.sql && \
  sed -i "s/pass/$DB_PASS/g" /etc/mysql/init.sql

COPY script.sh .

RUN mkdir /run/mysqld && chmod +x script.sh

CMD ["./script.sh"]