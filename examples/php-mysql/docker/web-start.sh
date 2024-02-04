#!/bin/bash
set -e

# Instala las extensiones PHP necesarias
docker-php-ext-install mysqli pdo pdo_mysql

# Ejecuta el comando predeterminado de Apache (CMD del Dockerfile php:8.0-apache)
exec apache2-foreground
