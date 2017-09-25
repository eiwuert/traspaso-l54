FROM debian:jessie

RUN apt-get update && \
    apt-get install -y vim curl php5 php5-fpm php5-cli php5-mysql \
      ca-certificates php5-curl --no-install-recommends && \
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY . /var/www/docker/consola-apps

RUN chown -R www-data:www-data /var/www/docker/consola-apps

RUN sed -i 's/\;clear_env/clear_env/g' /etc/php5/fpm/pool.d/www.conf

RUN cd /var/www/docker/traspaso && \
    composer install --no-interaction

EXPOSE 9000
