FROM php:7.4.1-apache

COPY . /var/www/html/scout-bot/

COPY ./000-default.conf /etc/apache2/sites-available/

RUN apt-get update && \
    apt-get install -y libicu-dev && \
    docker-php-ext-configure intl && \
    docker-php-ext-install intl && \
    docker-php-ext-install mysqli

RUN a2enmod rewrite
