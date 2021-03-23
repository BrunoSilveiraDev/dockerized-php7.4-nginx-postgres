FROM php:8.0-fpm

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

RUN chmod +x /usr/local/bin/install-php-extensions && sync && \
    install-php-extensions gd xdebug ldap mcrypt oauth pdo_mysql pdo_pgsql uuid imap http intl @composer

# composer installation
# docker run --rm -v $(pwd):/app composer install 
#  update autoloading
# php composer.phar dump-autoload