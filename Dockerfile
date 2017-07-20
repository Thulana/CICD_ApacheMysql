FROM mysql:5.5
MAINTAINER thulana<thulanakannangara@gmail.com>
ENV MYSQL_ROOT_PASSWORD admin
ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data
ENV APACHE_LOG_DIR /var/log/apache2

RUN apt-get update && apt-get install -y apache2

