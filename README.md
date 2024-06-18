# APACHE - PHP - SSL

## Make dirs to save the keys
sudo mkdir -p /etc/ssl/private
sudo mkdir -p /etc/ssl/certs

## Generate o Signed SSL
sudo openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/ssl/private/selfsigned.key -out /etc/ssl/certs/selfsigned.crt

## RUNNING
- docker-compose up -d

## GET
- https://localhost:8443