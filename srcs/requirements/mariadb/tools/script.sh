#!bin/bash

cp my.cnf /etc/mysql/

if [ -d /var/lib/mysql/finception ]
then 
echo "already exist !"
else
service mysql start
mysql -u root -e "CREATE USER '${DB_USER}'@'%' IDENTIFIED BY '${DB_PASSWORD}';"
mysql -u root -e "CREATE DATABASE ${DB_NAME};"
mysql -u root -e "USE ${DB_NAME}; GRANT ALL PRIVILEGES ON * TO '${DB_USER}'@'%'; "
mysql -u root -e "FLUSH PRIVILEGES;"
mysqladmin --user=root password ${ROOT_PASSWORD}
mysql -u root --password=${ROOT_PASSWORD} ${DB_NAME} < /db.sql
service mysql stop
fi
mysqld_safe
