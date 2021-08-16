FROM debian:latest

RUN apt-get update && apt-get upgrade && apt install bind9 bind9utils bind9-doc bind9-host dnsutils -y
RUN apt-get install nano -y

RUN systemctl enable bind9

COPY /conf/named.conf /etc/bind/named.conf
COPY /conf/named.conf.default-zones /etc/bind/named.conf.default-zones
COPY /conf/named.conf.options /etc/bind/named.conf.options
COPY /conf/named.conf.local /etc/bind/named.conf.local

CMD named -c /etc/bind/named.conf -g