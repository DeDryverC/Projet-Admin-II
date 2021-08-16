FROM php:7.2-apache

RUN apt-get -y update
RUN apt-get install -y vim


COPY /www/index.php /var/www/woodytoys/intranet/index.php
COPY /config/sites-available/intranet.conf /etc/apache2/sites-available
COPY /config/apache2.conf /etc/apache2/apache2.conf