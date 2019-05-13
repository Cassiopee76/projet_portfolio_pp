# FROM php:7.3-cli-alpine
FROM php:7.3-apache
RUN docker-php-ext-install pdo_mysql
# COPY . /usr/src/portfolio
COPY . /var/www/html/
# WORKDIR /usr/src/portfolio
# CMD [ "php", "./index.php" ]