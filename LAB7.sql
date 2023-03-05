

CREATE DATABASE example_database;
USE example_database;

CREATE TABLE users (
    id INT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL,
);

--drop table users;
INSERT INTO users(id,name,email,password) VALUES
   (1,'sagor','sagor@gmail.com','123311'),
   (2,'sohag','sohag@gmail.com','127311'),
   (3,'nazim','nazim@gmail.com','177311');
-- trigger event
-- condition 
-- trigger action 


CREATE TRIGGER user_added
ON users
AFTER INSERT
AS
BEGIN
    INSERT INTO user_logs (user_id, action)
    SELECT id, 'New user added'
    FROM inserted;
END;

SELECT * FROM users;