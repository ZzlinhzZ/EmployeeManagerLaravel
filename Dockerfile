FROM php:8.1-apache
RUN docker-php-ext-install pdo pdo_mysql
WORKDIR /var/www/html
COPY . /var/www/html

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install
# RUN apt-get update -y && apt-get install -y libmariadb-dev
# RUN docker-php-ext-install mysqli
RUN chmod -R 777 storage
