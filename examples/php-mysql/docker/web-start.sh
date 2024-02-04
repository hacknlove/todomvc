#!/bin/bash
set -e

# Instala las extensiones PHP necesarias
docker-php-ext-install mysqli pdo pdo_mysql

# Habilita el módulo mod_rewrite para Apache
a2enmod rewrite

# Asegura que la configuración de Apache permita sobrescribir configuraciones a través de .htaccess
# Esto es necesario para que las reglas de reescritura en .htaccess funcionen
sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

# Ejecuta el comando predeterminado de Apache (CMD del Dockerfile php:8.0-apache)
exec apache2-foreground