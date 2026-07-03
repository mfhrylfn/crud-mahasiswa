FROM richarvey/nginx-php-fpm:3.1.6

WORKDIR /var/www/html

COPY . .

RUN composer install --no-dev --optimize-autoloader

RUN npm install && npm run build

RUN cp .env.example .env || true

RUN php artisan key:generate --force || true

RUN chown -R nginx:nginx /var/www/html

ENV WEBROOT=/var/www/html/public

EXPOSE 8080