CREATE DATABASE IF NOT EXISTS wordpress;
CREATE USER IF NOT EXISTS 'ykissiko'@'%' IDENTIFIED BY '1234';
GRANT ALL PRIVILEGES ON wordpress.* TO 'ykissiko'@'%';
FLUSH PRIVILEGES;
ALTER USER 'root'@'localhost' IDENTIFIED BY 'root1234';
