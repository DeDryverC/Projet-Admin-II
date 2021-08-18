FROM debian:latest

RUN apt-get update && apt-get upgrade && apt install bind9 bind9utils bind9-doc bind9-host dnsutils -y
RUN apt-get install lynx -y && apt-get install mutt -y
RUN apt-get install nano
CMD tail -f /dev/null 