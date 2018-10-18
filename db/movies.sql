-- In class demonstration

CREATE TABLE actor (
	id SERIAL PRIMARY KEY,
	name VARCHAR(100) NOT NULL,
	birthYear SMALLINT
);

CREATE TABLE movie (
	id SERIAL PRIMARY KEY,
	title VARCHAR(100) NOT NULL,
	runtime SMALLINT,
	year SMALLINT
);

CREATE TABLE actor_movie (
	id SERIAL PRIMARY KEY,
	actor_id INT NOT NULL REFERENCES actor(id),
	movie_id INT NOT NULL REFERENCES movie(id)
);

INSERT INTO actor (name, birthYear) VALUES ('Morgan Freeman', 1937);
INSERT INTO actor (name, birthYear) VALUES 
('Tom Cruise', 1962), ('Carrie Fisher', 1956), ('Elijah Wood', 1981);

SELECT name, birthYear FROM actor ORDER BY birthYear;

INSERT INTO movie (title, runtime, year) VALUES 
('Lord of the Rings Fellowship of the Ring', 228, 2001), 
('Mission: Impossible Fallout', 148, 2018), 
('Bruce Almighty', 101, 2003);

INSERT INTO actor_movie (actor_id, movie_id) VALUES
(4, 1), (1, 3), (2, 2);

SELECT * FROM movie WHERE title = 'Lord of the Rings Fellowship of the Ring';
SELECT * FROM movie WHERE title LIKE '%Mission%';

-- %words (ends with words)
-- words% (starts with words)
-- %words% (matches exactly)

SELECT m.title, a.name FROM movie AS m
	JOIN actor_movie AS am ON m.id = am.movie_id
	JOIN actor AS a ON a.id = am.actor_id
	WHERE m.title = 'Lord of the Rings Fellowship of the Ring'
	ORDER BY a.birthyear;