# ./docker/php/Dockerfile
FROM php:7.2-fpm

RUN apt-get update

RUN apt-get install -y \
        libzip-dev \
        zip 

RUN docker-php-ext-configure zip --with-libzip

RUN docker-php-ext-install pdo_mysql

RUN pecl install apcu-5.1.8
RUN docker-php-ext-enable apcu

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /usr/src/app

COPY apps/my-symfony-app /usr/src/app

RUN PATH=$PATH:/usr/src/apps/vendor/bin:bin