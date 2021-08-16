FROM debian:latest
RUN apt-get update && apt-get upgrade && apt install bind9 bind9utils bind9-doc bind9-host dnsutils -y

COPY /config/named.conf /etc/bind/name.conf
COPY /config/named.conf.default-zones /etc/bind/name.conf.default-zones
COPY /config/named.conf.local /etc/bind/name.conf.local
COPY /config/named.conf.options /etc/bind/name.conf.options


CMD named -c /etc/bind/named.conf -g