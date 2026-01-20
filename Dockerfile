FROM php:8.2-apache

# Enable Apache mod_rewrite (often useful even for simple sites)
RUN a2enmod rewrite

# Copy site files into Apache web root
COPY . /var/www/html/

# Set correct permissions
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80

