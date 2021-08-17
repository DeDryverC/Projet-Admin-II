FROM debian:latest
RUN apt-get update && apt-get upgrade -y
RUN apt-get install mysql-server -y

COPY mysql.conf.d /etc/mysql/mysql.conf.d