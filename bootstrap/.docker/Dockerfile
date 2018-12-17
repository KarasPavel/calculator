FROM php:7.1.8-apache

MAINTAINER Paul Redmond

COPY . /srv/app
COPY .docker/vhost.conf /etc/apache2/sites-available/000-default.conf

WORKDIR /srv/app

RUN docker-php-ext-install mbstring pdo pdo_mysql \
    && chown -R www-data:www-data /srv/app

RUN apt-get update -y && apt-get install -y openssl zip unzip git
RUN curl -sS https://getcomposer.org/installer | php -- --install-

RUN docker-php-ext-install pdo mbstring
RUN docker-php-ext-install pdo_mysql
WORKDIR /app
COPY . /app

RUN composer install

RUN php artisan key:generate
RUN php artisan migrate
RUN php artisan passport:install


CMD php artisan serve --host=127.0.0.1 --port=3333
EXPOSE 3333