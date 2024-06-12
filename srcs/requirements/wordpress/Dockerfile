FROM debian:latest

RUN apt-get update && apt-get upgrade -y && apt-get install  -y php-fpm php-mysqli curl

# We would need to copy the default server configuration file from the nginx container and the default.
# config for the php service and make some minor modifications to it.
# Default config for PHP location: /etc/php/8.2/fpm/pool.d/www.conf.

COPY www.conf /etc/php/8.2/fpm/pool.d/.

COPY ./tools/script.sh .

RUN chmod +x script.sh

CMD ["./tools/script.sh"]
