#expand env variables

sed -i "s/database_name_here/$DB_NAME/" wp-config.php
sed -i "s/username_here/$DB_USER/" wp-config.php
sed -i "s/password_here/$DB_PASSWORD/" wp-config.php
sed -i "s/hostname_here/$DB_HOST/" wp-config.php

cp wp-config.php /var/www/html/

cp www.conf /etc/php/7.3/fpm/pool.d/www.conf

cp -R wordpress/* /var/www/html


service php7.3-fpm start

#if not bad gateway

service php7.3-fpm stop

/usr/sbin/php-fpm7.3 --nodaemonize
