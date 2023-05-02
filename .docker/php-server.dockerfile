FROM php:7.4-fpm

RUN apt-get -y update \
&& apt-get install -y libicu-dev \
&& apt-get install -y libpq-dev \
&& docker-php-ext-configure intl \
&& docker-php-ext-install intl \
&& docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
&& docker-php-ext-install pdo pdo_pgsql pgsql

COPY . /var/www/html

RUN cd /usr/local/etc/php/conf.d/ && \
  echo 'memory_limit = 512M' >> /usr/local/etc/php/conf.d/docker-php-memlimit.ini

RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
EXPOSE 443
