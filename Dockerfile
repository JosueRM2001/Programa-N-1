# Use a base image of PHP with Apache
FROM php:8.1-apache

# Set the ServerName to avoid the warning
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Copy the project files into the container
COPY . /var/www/html/

# Set the correct permissions for Apache to read the files
RUN chown -R www-data:www-data /var/www/html

# Expose port 80 for the web server
EXPOSE 80

# Enable Apache mod_rewrite if needed (e.g., for .htaccess rules)
RUN a2enmod rewrite
