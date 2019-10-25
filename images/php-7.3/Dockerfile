FROM php:7.3-fpm

RUN apt-get update \
  && apt-get install -y libpq-dev \
    autoconf \
    cmake \
    file \
    g++ \
    gcc \
    libc-dev \
    make \
    git \
    pkgconf \
    re2c \
    libpng-dev  \
    libxslt-dev \
    libzip-dev \
    libxml2-dev \
    supervisor \
    nano \
    iputils-ping \
    mc \
    zip

RUN docker-php-ext-install \
        gd \
        bcmath \
        intl \
        pcntl \
        mysqli \
        pdo_mysql \
        pdo_pgsql \
        mbstring \
        soap \
        iconv \
        zip

ENV COMPOSER_VERSION 1.7.2

ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_HOME /tmp
ENV PATH /scripts:/scripts/aliases:$PATH

RUN set -xe \
    && mkdir -p "$COMPOSER_HOME" \
    && php -r "copy('https://getcomposer.org/installer', '/tmp/composer-setup.php');" \
    && php -r "if(hash_file('SHA384','/tmp/composer-setup.php')===file_get_contents('https://composer.github.io/installer.sig') ){echo 'Verified';}else{unlink('/tmp/composer-setup.php');}" \
    && ls -a /tmp \
    && php /tmp/composer-setup.php --no-ansi --install-dir=/usr/bin --filename=composer --version=$COMPOSER_VERSION \
    && composer --ansi --version --no-interaction \
    && composer --no-interaction global require 'hirak/prestissimo' \
    && composer clear-cache \
    && rm -rf /tmp/composer-setup.php /tmp/.htaccess \
    # show php info
    && php -v \
    && php-fpm -v \
    && php -m

WORKDIR /etc/nginx
