FROM php:8.2-fpm-buster

RUN mkdir -p /var/www/symfony/var/cache/dev \
    && chmod -R 777 /var/www/symfony/var/cache/dev

RUN chown -R www-data:www-data /var/www/symfony/var/cache/dev

RUN apt-get update && apt-get install -y \
    gnupg \
    g++ \
    procps \
    openssl \
    git \
    unzip \
    zlib1g-dev \
    libzip-dev \
    libfreetype6-dev \
    libpng-dev \
    libjpeg-dev \
    libicu-dev  \
    libonig-dev \
    libxslt1-dev \
    default-libmysqlclient-dev \
    acl \
    && rm -rf /var/lib/apt/lists/*

COPY ../conf/php.ini /etc/php/

RUN docker-php-ext-configure gd --with-jpeg --with-freetype && \
    docker-php-ext-install pdo pdo_mysql mysqli zip xsl gd intl opcache exif mbstring && \
    rm -rf /var/lib/apt/lists/*

WORKDIR /var/www/symfony.