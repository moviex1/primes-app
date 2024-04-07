FROM php:8.3-fpm-alpine3.19

WORKDIR /app

EXPOSE 8000

COPY . /app

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN composer install --no-interaction --no-scripts

CMD ["php", "-S", "0.0.0.0:8000"]