FROM php:8.2

RUN apt-get update && apt-get install -y zip unzip p7zip-full



COPY . /var/www/html
WORKDIR /var/www/html

RUN chmod -R 777 /var/www/html/
CMD ["php"]

