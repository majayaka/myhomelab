FROM wordpress:php8.2-apache

# Copy the custom theme to the WordPress themes directory inside the container
COPY . /var/www/html/wp-content/themes/portfolio/

# Set correct permissions so WordPress can access/write to the theme files
RUN chown -R www-data:www-data /var/www/html/wp-content/themes/portfolio/