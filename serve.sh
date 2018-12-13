#!/bin/bash

chown -R mysql:mysql /var/lib/mysql /var/run/mysqld

echo '[+] Starting mysql...'
service mysql start

echo '[+] Starting apache'
service apache2 start

#XSS admin bot every 10 sec
while sleep 60; do phantomjs --ignore-ssl-errors=true --local-to-remote-url-access=true --web-security=false --ssl-protocol=any /var/www/html/ch10/admin_auto_run.js; done &

while true
do
    tail -f /var/log/apache2/*.log
    exit 0
done