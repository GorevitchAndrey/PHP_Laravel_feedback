FROM php:7.4-fpm

WORKDIR /app

RUN apt-get update && apt-get install -y

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php -r "if (hash_file('sha384', 'composer-setup.php') === 'c31c1e292ad7be5f49291169c0ac8f683499edddcfd4e42232982d0fd193004208a58ff6f353fde0012d35fdd72bc394') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
RUN php composer-setup.php
RUN php -r "unlink('composer-setup.php');"

RUN mv composer.phar /usr/local/bin/composer

RUN apt install npm -y

RUN npm install --global gulp-cli

# pdo_mysql
RUN apt-get install -y \
      libpq-dev && \
    docker-php-ext-install -j$(nproc) \
      pdo_mysql

COPY .deploy/docker/backend/entrypoint.sh /entrypoint-component.sh

EXPOSE 9000

CMD ["/entrypoint-component.sh"]