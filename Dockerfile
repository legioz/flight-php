FROM php:7.4-apache

RUN apt-get update && apt-get install -y --no-install-recommends \
    wget \
    curl \
    libmcrypt-dev \
    mariadb-client \
    libmagickwand-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    git 

RUN a2enmod rewrite

RUN apt-get clean && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY ./www /var/www/
