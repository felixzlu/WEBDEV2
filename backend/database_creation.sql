DROP DATABASE IF EXISTS online_library;
CREATE DATABASE online_library;
GRANT USAGE ON *.* TO 'root'@'localhost' IDENTIFIED BY '';
GRANT ALL PRIVILEGES ON online_library.* TO 'root'@'localhost';
FLUSH PRIVILEGES;
USE online_library;

CREATE TABLE books (
	id INT AUTO_INCREMENT NOT NULL,
    title VARCHAR(255) NOT NULL,
    author VARCHAR(255) NOT NULL,
    year VARCHAR(4) NOT NULL,
    genre VARCHAR(255) NOT NULL,
    description VARCHAR(255) NOT NULL,
    CONSTRAINT pk_books PRIMARY KEY (id)
);

CREATE TABLE users (
	id INT AUTO_INCREMENT NOT NULL,
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
    review_comment VARCHAR(255) NOT NULL,
    date_and_time DATETIME NOT NULL,
    CONSTRAINT fk_reviews_users FOREIGN KEY (users_id) REFERENCES users (id),
    CONSTRAINT fk_reviews_books FOREIGN KEY (books_id) REFERENCES books (id)
);

INSERT INTO users (username,password,email)
VALUES 
('felix','pass2','felix@algonquin.com'),
('aravind','pass3','aravind@gmail.com'),
('anas','pass8','anas@hotmail.com');

INSERT INTO books (title,author,year,genre,description) 
VALUES
('Harry Potter and the Philisophers Stone','J. K. Rowling','1997','fantasy','Harry is a young wizard who discovers his magical heritage'),
('Harry Potter and the Chamber of Secrets','J. K. Rowling','1998','fantasy','Harrys second year at Hogwarts School of Witchcraft and Wizardry'),
('Pride and Prejudice','Jane Austen','1813','romance','The romantic misadventures of Elizabeth Bennet and Mr. Darcy'),
('Treasure Island','Robert Louis Stevenson','1883','adventure','The story of young Jim Hawkins search for buried treasure'),
('A Brief History of Time','Stephen Hawking','1988','science','A work that explores the origins and structure of the universe');