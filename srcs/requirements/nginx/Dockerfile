FROM debian:latest

RUN apt-get update && apt-get upgrade -y && apt-get install -y nginx openssl

# We would need to copy the default server configuration file from the nginx container and the default.
# config for the php service and make some minor modifications to it.
# Default config for NGINX location: /etc/nginx/sites-available/default.

COPY default /etc/nginx/sites-available/.
RUN openssl req -x509 -newkey rsa:4096 -keyout /etc/ssl/certs/ihama.42.fr.key -out /etc/ssl/certs/ihama.42.fr.crt -sha256 -days 3650 -nodes -subj "/C=DE/ST=Baden-Wurttemberg/L=Heilbronn/O=42Heilbronn/OU=Issoufou Hama ROOT CA/CN=Issoufou Hama"
CMD ["nginx", "-g" , "daemon off;"]



