FROM phpearth/php:7.4-nginx

RUN apk add php7-pdo_pgsql && \ 
    apk add --no-cache composer