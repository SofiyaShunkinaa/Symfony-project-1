FROM nginx:1.25-alpine

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN composer require symfony/website-skeleton

RUN curl -sS https://get.symfony.com/cli/installer | bash && mv /root/.symfony*/bin/symfony /usr/local/bin/symfony

COPY nginx.conf  /etc/nginx/
COPY default.conf /etc/nginx/conf.d/
COPY ../../app /var/www/symfony/public

RUN echo "upstream php-upstream { server php:9000; }" > /etc/nginx/conf.d/upstream.conf

EXPOSE 80
EXPOSE 443
