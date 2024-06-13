# Use the official PHP image
FROM php:7.4-apache

# Copy the PHP files to the Apache web root
COPY . /var/www/html/

# Create the uploads directory and set appropriate permissions
RUN mkdir /var/www/html/uploads && chown -R www-data:www-data /var/www/html/uploads