FROM nginx:1.25-alpine

USER www-data

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN composer install \
    --no-interaction \
    --no-plugins \
    --no-scripts \
    --no-dev \
    --prefer-dist

RUN composer require symfony/website-skeleton

COPY nginx.conf  /etc/nginx/
COPY ./templates/default.conf /etc/nginx/conf.d/
COPY ../../app /var/www/symfony/public

RUN echo "upstream php-upstream { server php:9000; }" > /etc/nginx/conf.d/upstream.conf

EXPOSE 80
EXPOSE 443


WORKDIR /var/www/symfony