FROM debian:buster

RUN apt-get update
RUN apt-get install -y php7.3-fpm php7.3-mysql

COPY tools /

COPY config /

CMD ["sh", "script.sh"]


