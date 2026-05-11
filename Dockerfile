FROM dunglas/frankenphp

RUN apt-get update && apt-get install -y \
    git \
    unzip \
   zip

RUN install-php-extensions   \
    intl \
    pdo_mysql \
    mbstring \
    zip

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app

COPY . /app

RUN composer install --no-interaction --prefer-dist 

EXPOSE 80

CMD ["frankenphp", "run", "--config", "/etc/caddy/Caddyfile"]