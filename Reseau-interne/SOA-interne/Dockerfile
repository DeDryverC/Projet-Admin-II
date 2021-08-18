FROM debian:latest
RUN apt-get update && apt-get upgrade && apt install bind9 bind9utils bind9-doc bind9-host dnsutils -y
RUN apt-get install nano

COPY /config/named.conf /etc/bind/named.conf
COPY /config/named.conf.default-zones /etc/bind/named.conf.default-zones
COPY /config/named.conf.local /etc/bind/named.conf.local
COPY /config/named.conf.options /etc/bind/named.conf.options


RUN mkdir /etc/bind/master
COPY /zones/1.168.192.in-addr.arpa /etc/bind/master
COPY /zones/intranet.woodytoys /etc/bind/master

CMD named -c /etc/bind/named.conf -g
CMD tail -f /dev/null
