#!/bin/bash
sudo sed -i 's/#Port 22/Port 536/' /etc/ssh/sshd_config
sudo service sshd restart
sudo service ssh restart
sudo sysctl -w net.ipv6.conf.all.disable_ipv6=1
sudo sysctl -w net.ipv6.conf.default.disable_ipv6=1
########
sudo apt-get update -y
# Install Apache2
sudo apt-get install apache2 -y
# Allow to run Apache on boot up
sudo systemctl enable apache2
# Restart Apache Web Server
sudo a2enmod ssl
sudo a2enmod rewrite
sudo systemctl start apache2

