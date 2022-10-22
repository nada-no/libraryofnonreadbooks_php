
use bookself;

CREATE TABLE books (
    id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(80) NOT NULL,
    author VARCHAR(30),
    toread BOOLEAN,
    dateinserted TIMESTAMP
);