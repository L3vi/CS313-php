CREATE TABLE users (
	id SERIAL PRIMARY KEY,
	name VARCHAR(30) UNIQUE NOT NULL,
	password VARCHAR(50)
);

CREATE TABLE activities (
	id SERIAL PRIMARY KEY,
	totalHours INT,
	name VARCHAR(30),
	user_id INT REFERENCES users(id)
);

CREATE TABLE timesheet (
	id SERIAL PRIMARY KEY,
	startTime DATE,
	endTime DATE, 
	totalHours INT,
	activity_id INT REFERENCES activities(id),
	notes TEXT
);