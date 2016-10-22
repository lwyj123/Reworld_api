use reworld; #打开库reworld
DROP TABLE if exists reworld_user; #如果存在reworld则删除
CREATE TABLE reworld_user(
   reworld_id INT NOT NULL AUTO_INCREMENT,
   reworld_nickname VARCHAR(40) NOT NULL,
   reworld_email VARCHAR(40) NOT NULL,
   #encoded password
   reworld_password VARCHAR(40) NOT NULL, 
   lastlogin_date DATE,
   PRIMARY KEY ( reworld_id )
);