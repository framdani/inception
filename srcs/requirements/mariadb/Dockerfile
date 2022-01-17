
#Mariadb is community-developed relational database management system

FROM debian:buster

RUN apt-get update
RUN apt-get install -y mariadb-server

COPY tools /

COPY conf /

CMD ["sh" , "script.sh"]