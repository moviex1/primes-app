FROM php:8.3-fpm-alpine3.19

WORKDIR /app

EXPOSE 8000

COPY . /app

CMD ["php", "-S", "0.0.0.0:8000"]