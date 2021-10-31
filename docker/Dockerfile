FROM php:7.4-apache
WORKDIR /var/www/html/proxylms

COPY apache/proxylms.conf /etc/apache2/sites-available/proxylms.conf

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf \
    && a2dissite 000-default \
    && a2ensite proxylms \
    && service apache2 restart

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

RUN apt-get update \
    && apt-get -y install nodejs \
    && apt-get -y install npm
