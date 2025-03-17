DROP DATABASE IF EXISTS online_library;
CREATE DATABASE online_library;
GRANT USAGE ON *.* TO 'root'@'localhost' IDENTIFIED BY '';
GRANT ALL PRIVILEGES ON online_library.* TO 'root'@'localhost';
FLUSH PRIVILEGES;
USE online_library;

CREATE TABLE books (
	id INT NOT NULL,
    title VARCHAR(255) NOT NULL,
    author VARCHAR(255) NOT NULL,
    year YEAR NOT NULL,
    genre VARCHAR(100) NOT NULL,
    description VARCHAR(100) NOT NULL,
    CONSTRAINT pk_books PRIMARY KEY (id)
);

CREATE TABLE users (
	id INT NOT NULL,
    username VARCHAR(30) NOT NULL,
    password VARCHAR(30) NOT NULL,
    email VARCHAR(255) NOT NULL,
    CONSTRAINT pk_users PRIMARY KEY (id)
);

CREATE TABLE favorites (
	users_id INT NOT NULL,
    books_id INT NOT NULL,
    CONSTRAINT fk_favorites_users FOREIGN KEY (users_id) REFERENCES users (id),
    CONSTRAINT fk_favorites_books FOREIGN KEY (books_id) REFERENCES books (id)
);

CREATE TABLE reviews (
	users_id INT NOT NULL,
    books_id INT NOT NULL,
    star_rating INT NOT NULL,
    review_comment VARCHAR(300) NOT NULL,
    CONSTRAINT fk_reviews_users FOREIGN KEY (users_id) REFERENCES users (id),
    CONSTRAINT fk_reviews_books FOREIGN KEY (books_id) REFERENCES books (id)
);