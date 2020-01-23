#!/bin/bash

echo '[+] Cloning a repository'
git clone -b hardcore https://github.com/destine21/wreck-it-lab
echo '[+] Replace html folder'
rm -rf /var/www/html/
mv wreck-it-lab/html/ /var/www/
echo '[+] Restart apache server'
service apache2 restart
rm -rf wreck-it-lab
echo '[+] Done'