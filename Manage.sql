create DATABASE manage;

USE manage;

CREATE TABLE students(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR (255) NOT NULL,
    email VARCHAR (255) Unique NOT NULL,
    course VARCHAR (100) NOT NULL,
    password VARCHAR (255) NOT NULL
);

CREATE TABLE admin(
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR (225) Unique NOT NULL,
    password VARCHAR (225) NOT NULL
);