FROM php:7.4-apache

# Copie os certificados SSL para o contêiner
COPY ./ssl/certs/selfsigned.crt /etc/ssl/certs/selfsigned.crt
COPY ./ssl/private/selfsigned.key /etc/ssl/private/selfsigned.key

# Ativar o módulo SSL do Apache e configurar o site SSL
RUN a2enmod ssl
RUN a2ensite default-ssl

# Expor a porta 80
EXPOSE 80 443
CMD ["apache2-foreground"]