service mysql restart
mysql -u root -e "CREATE DATABASE wordpress;"
mysql -u root -e "CREATE USER 'nverbrug'@'localhost' IDENTIFIED BY 'pass';"
mysql -u root -e "GRANT ALL ON wordpress.* TO 'nverbrug'@'localhost';"
mysql -u root -e "FLUSH PRIVILEGES;"
service nginx start && service php7.3-fpm start && service mysql restart
