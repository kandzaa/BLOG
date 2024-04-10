CREATE DATABASE blog_IPa22;
USE blog_IPa22;


CREATE TABLE posts (
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	title VARCHAR(255) NOT NULL
);


INSERT INTO posts
(title)
VALUES
("My First Blog Post"),
("My Second Blog Post");





CREATE TABLE categories (
id INT PRIMARY KEY NOT NULL AUTO_INCREMENT, 
NAME VARCHAR(255) NOT NULL,
DESCRIPTION TEXT
)

INSERT INTO categories(id, NAME)
VALUES
(1, 'sport'),
(2, 'music'),
(3, 'food')

ALTER TABLE posts
ADD COLUMN category_id INT,
ADD CONSTRAINT fk_category_id FOREIGN KEY (category_id) REFERENCES categories(id);

 UPDATE posts SET category_id = 1 WHERE id = 1;
UPDATE posts SET category_id = 2 WHERE id = 2;

  SELECT * FROM posts;
  SELECT * FROM categories;
