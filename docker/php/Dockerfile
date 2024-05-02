FROM php:8.2-fpm-buster

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

COPY php.ini /etc/php/

RUN docker-php-ext-configure gd --with-jpeg --with-freetype

RUN docker-php-ext-install \
    pdo pdo_mysql zip xsl gd intl opcache exif mbstring

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN composer require symfony/website-skeleton

RUN curl -sS https://get.symfony.com/cli/installer | bash && mv /root/.symfony*/bin/symfony /usr/local/bin/symfony

WORKDIR /var/www/symfony