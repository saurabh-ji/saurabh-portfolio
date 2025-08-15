FROM php:8.1-apache

# Enable Apache mod_rewrite (optional but useful)
RUN a2enmod rewrite

# Copy your website files to Apache's root directory
COPY . /var/www/html/

# Give proper permissions (optional)
RUN chown -R www-data:www-data /var/www/html

# Expose port 5000
EXPOSE 5000

# Apache starts automatically via entrypoint in base image
