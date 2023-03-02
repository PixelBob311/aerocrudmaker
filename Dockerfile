FROM php:8.1-fpm

RUN apt-get update && apt-get install -y \
    git \
    zip \
    curl \
    sudo \
    unzip
# Install composer
#ENV COMPOSER_ALLOW_SUPERUSER=1
COPY --from=composer:2.0 /usr/bin/composer /usr/bin/composer