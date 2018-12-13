#!/bin/bash
if [[ $EUID -ne 0 ]]; then
   echo "This script must be run as root" 1>&2
   exit 1
fi

sudo apt-get install php-ssh2 -y
sudo apt-get install php-seclib -y
sudo apt-get install php-math-biginteger -y

