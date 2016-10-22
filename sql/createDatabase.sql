DROP DATABASE Reworld;
CREATE DATABASE Reworld DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
/* 创建localuser只能本地访问  */
CREATE USER 'Reworld_localuser'@'localhost' IDENTIFIED BY 'lwyj123' ;
GRANT USAGE ON * . * TO 'Reworld_localuser'@'localhost' IDENTIFIED BY 'lwyj123' WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;
GRANT ALL PRIVILEGES ON Reworld . * TO 'Reworld_localuser'@'localhost' WITH GRANT OPTION;
flush privileges;