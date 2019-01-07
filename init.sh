#!/bin/bash


set -e

echo "starting SSH ..."
service ssh start
echo "ssh started."
/usr/sbin/apache2ctl -D FOREGROUND 