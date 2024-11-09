# Usa la imagen oficial de PHP con Apache
FROM php:8.2-apache

# Copia los archivos del proyecto a la carpeta de trabajo de Apache
COPY . /var/www/html/

# Habilita la reescritura de URL de Apache (si es necesario para tu proyecto)
RUN a2enmod rewrite

# Exponer el puerto 80 para acceder a la aplicación desde fuera del contenedor
EXPOSE 80
