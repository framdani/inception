FROM debian:buster

RUN apt-get upgrade
RUN apt-get update


RUN apt-get install -y nginx vim


COPY ./conf/default /etc/nginx/sites-available/default
COPY ./tools/nginx-selfsigned.key /etc/ssl/
COPY ./tools/nginx-selfsigned.crt /etc/ssl/

CMD ["nginx", "-g", "daemon off;"]
