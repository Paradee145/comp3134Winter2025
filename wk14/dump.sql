CREATE DATABASE IF NOT EXISTS lab9;
USE lab9;

DROP TABLE IF EXISTS users;
CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(100),
  email VARCHAR(100),
  firstname VARCHAR(100),
  lastname VARCHAR(100),
  active INT
);

INSERT INTO users (username, email, firstname, lastname, active) VALUES
('user1', 'user1@mail.com', 'Alice', 'Smith', 1),
('user2', 'user2@mail.com', 'Bob', 'Jones', 1),
('user3', 'user3@mail.com', 'Chris', 'Brown', 1),
('user4', 'user4@mail.com', 'Dana', 'White', 1),
('user5', 'user5@mail.com', 'Eva', 'Black', 1),
('ben123', 'ben@mail.com', 'Ben', 'Solo', 0);
