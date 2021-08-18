FROM php:7.2-apache

RUN apt-get -y update
RUN apt-get install -y vim
RUN apt-get install nano
RUN docker-php-ext-install mysqli pdo pdo_mysql

COPY /www/index.php /var/www/woodytoys/local/index.php
COPY /config/sites-available/local.conf /etc/apache2/sites-available
COPY /config/apache2.conf /etc/apache2/apache2.conf

RUN a2dissite 000-default.conf
RUN a2ensite local.conf

CMD tail -f /dev/null
