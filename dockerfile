# Gunakan PHP 8.2 dengan Apache
FROM php:8.2-apache

# Install dependencies Laravel + SQLite
RUN apt-get update && apt-get install -y \
    git unzip libzip-dev libsqlite3-dev \
    && docker-php-ext-install pdo pdo_sqlite zip

# Aktifkan mod_rewrite untuk Laravel
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Copy semua file ke container
COPY . .

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Install dependencies Laravel
RUN composer install --no-dev --optimize-autoloader

# Buat file SQLite
RUN touch database/database.sqlite

# Set permission
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Ubah DocumentRoot Apache ke folder public
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/000-default.conf

# Port yang dipakai Northflank
EXPOSE 8080
