FROM php:8.0-apache
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN apt-get update && apt-get upgrade -y
COPY mysql.conf /etc/apache2/sites-available/
RUN a2dissite 000-default.conf
RUN a2dissite default-ssl.conf
RUN a2ensite mysql.conf
COPY ./consulta/* /var/www/mysql/
RUN chown www-data:www-data /var/www/mysql/
CMD ["apachectl", "-D", "FOREGROUND"]
RUN apt install -y apache2-utils
RUN a2enmod userdir
RUN useradd debian
RUN mkdir -p "/home/debian/public_html"
RUN chown www-data:www-data /home/debian/public_html
COPY ./consulta/* /home/debian/public_html/