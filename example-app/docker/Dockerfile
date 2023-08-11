FROM php:8.2-apache

ENV APACHE_DOCUMENT_ROOT /app/public/

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

RUN apt-get update && apt-get install -y \
  postgresql \
  libzip-dev \
  libpq-dev \
  && rm -rf /var/lib/apt/lists/*



RUN docker-php-ext-install \
    pdo \
    pdo_pgsql \
    zip \
    sockets \
    pgsql


WORKDIR /app

COPY . .

RUN a2enmod rewrite
RUN chmod -R 777 ./*

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php -r "if (hash_file('sha384', 'composer-setup.php') === 'e21205b207c3ff031906575712edab6f13eb0b361f2085f1f1237b7126d785e826a450292b6cfd1d64d92e6563bbde02') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" \
    && php composer-setup.php --filename=composer \
    && php -r "unlink('composer-setup.php');"

RUN php composer install

RUN php artisan config:clear
