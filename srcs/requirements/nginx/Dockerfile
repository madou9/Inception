FROM debian:latest

RUN apt update && apt upgrade -y && apt install -y nginx

# We would need to copy the default server configuration file from the nginx container and the default.
# config for the php service and make some minor modifications to it.
# Default config for NGINX location: /etc/nginx/sites-available/default.

COPY default /etc/nginx/sites-available/.

CMD ["nginx", "-g" , "daemon off;"]



