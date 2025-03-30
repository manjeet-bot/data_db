# PHP + Apache Install
FROM php:8.1-apache

# Extensions Install Karo
RUN docker-php-ext-install pdo pdo_pgsql pgsql

# Copy Project Files
COPY . /var/www/html/

# Expose Port
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]

