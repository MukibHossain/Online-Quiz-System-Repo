CREATE DATABASE quiz_system;
USE quiz_system;

CREATE TABLE users (
id INT AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(50),
email VARCHAR(100),
password VARCHAR(255)
);

CREATE TABLE questions (
id INT AUTO_INCREMENT PRIMARY KEY,
question TEXT,
option1 VARCHAR(255),
option2 VARCHAR(255),
option3 VARCHAR(255),
option4 VARCHAR(255),
correct_option INT
);

INSERT INTO questions (question, option1, option2, option3, option4, correct_option) VALUES
('What is 2+2?', '2','3','4','5',3),
('Capital of Bangladesh?','Dhaka','Chittagong','Khulna','Rajshahi',1);
