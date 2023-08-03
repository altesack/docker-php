FROM php:8.2-fpm-alpine

# Install PHP extensions
RUN apk add icu-dev bash
RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-configure intl && docker-php-ext-install intl

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www
