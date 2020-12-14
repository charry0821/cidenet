FROM php:7.4.11-apache
MAINTAINER adminsoftware@autonoma.edu.co
RUN apt-get update && apt-get install -y libldb-dev libldap2-dev git zlib1g-dev
RUN apt-get update && apt-get install -y build-essential libssl-dev
RUN apt-get update && apt-get install -y libzip-dev
RUN docker-php-ext-configure ldap --with-libdir=lib/x86_64-linux-gnu
RUN apt-get update && docker-php-ext-install pdo_mysql mysqli zip
RUN apt-get install -y libfreetype6-dev libjpeg62-turbo-dev libpng-dev
RUN rm -rf /var/lib/apt/lists/*
RUN docker-php-ext-configure gd --with-jpeg=/usr/include/ --with-freetype=/usr/include/
RUN docker-php-ext-install gd
WORKDIR /
RUN curl -sS https://getcomposer.org/installer -o composer-setup.php
RUN php composer-setup.php --install-dir=/usr/local/bin --filename=composer
RUN echo 'ServerName localhost' >> /etc/apache2/apache2.conf
RUN a2enmod rewrite proxy proxy_fcgi headers
RUN service apache2 restart
WORKDIR /var/www/html/
CMD php artisan storage:link
CMD php artisan serve --host=0.0.0.0 --port=80

EXPOSE 80