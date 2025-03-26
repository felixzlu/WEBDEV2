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
    date_added DATETIME DEFAULT CURRENT_TIMESTAMP,
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
    date_and_time DATETIME DEFAULT CURRENT_TIMESTAMP,
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
('A Brief History of Time','Stephen Hawking','1988','science','A work that explores the origins and structure of the universe'),
('The Girl with the Dragon','Stieg Larsson','2005','Mystery','A journalist and hacker investigate a womans disappearance, uncovering dark secrets.'),
('Gone Girl','Gillian Flynn','2012','Mystery','A psychological thriller about a wifes disappearance and the twisted media frenzy that follows.'),
('Dune','Frank Herbert','1965','Science Fiction','A young nobleman battles for survival on a desert planet in a tale of politics, prophecy, and power'),
('The Name of the Wind','Patrick Rothfuss','2007','Fantasy','The story of a magically gifted young man who becomes a legend.'),
('Kindred','Octavia E. Butler','1979','Sci-Fi / Historical','A modern Black woman is repeatedly pulled back in time to the slavery-era South.'),
('Pride and Prejudice','Jane Austen','1813','Romance','A sharp-witted story about love, class, and misunderstandings in 19th-century England.'),
('The Notebook','Nicholas Sparks','1996','Romance','A timeless love story of a young couple separated by fate and reunited years later.'),
('To Kill a Mockingbird','Harper Lee','1960','Drama','A powerful look at racism and justice through a childs eyes in the American South.'),
('Catch-22','Joseph Heller','1961','Satire','A darkly comedic take on the absurdities of war and military bureaucracy.'),
('Normal People','Sally Rooney','2018','Literary Fiction','A nuanced portrayal of a complex relationship as two people drift in and out of each others lives.'),
('The Kite Runner','Khaled Hossein','2003','Drama','A story of friendship and redemption set against the backdrop of a changing Afghanistan.'),
('Atomic Habits	','James Clear	','2018','Self-Help','A guide to building good habits and breaking bad ones with practical strategies.'),
('Educated','Tara Westover','2018','Memoir','A woman escapes a survivalist upbringing to earn a PhD from Cambridge University.'),
('Becoming	','Michelle Obama','2018','Biography','The former First Lady shares her life story and personal journey.'),
('The Subtle Art of Not Giving a Fck*','Mark Manson','2016','Self-Help','A counterintuitive guide to living a better life by caring less about what doesnt matter.'),
('Steve Jobs','Walter Isaacson','2011','Biography','The authorized biography of the visionary behind Apple Inc.'),
('The Shining','Stephen King','1977','Horror','A family in an isolated hotel confronts terrifying supernatural forces.');

INSERT INTO reviews (users_id,books_id,star_rating,review_comment)
VALUES
(1,16,5,'This book is fantastic'),
(2,16,4,'A great read'),
(3,16,5,'You will love this book'),
(1,17,2,'Okay'),
(2,15,4,'I thoroughly enjoyed this book'),
(3,14,3,'This book keeps you on your toes'),
(1,13,2,'I feel asleep reading this book'),
(2,12,1,'Would not recommend'),
(3,11,1,'I wish I could give 0 stars');
