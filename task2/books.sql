CREATE TABLE Books(
 id int NOT NULL AUTO_INCREMENT,
 author_id int,
 name VARCHAR(100),
 PRIMARY KEY (id),
 FOREIGN KEY(author_id) REFERENCES Authors(id)
);