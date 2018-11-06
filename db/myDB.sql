CREATE TABLE users (
	id SERIAL PRIMARY KEY,
	email VARCHAR(30) UNIQUE NOT NULL,
	password VARCHAR(50)
);

CREATE TABLE activities (
	id SERIAL PRIMARY KEY,
	name VARCHAR(30),
	user_id INT REFERENCES users(id)
);

CREATE TABLE timeEntries (
	id SERIAL PRIMARY KEY,
	startTime TIMESTAMP,
	endTime TIMESTAMP, 
	activity_id INT REFERENCES activities(id),
	notes TEXT
);

-- Insert information for levistuma account
INSERT INTO users (email, password) VALUES ('levistum@yahoo.com', 'admin');
INSERT INTO activities (name, user_id) VALUES ('work', 1);
INSERT INTO activities (name, user_id) VALUES ('service', 1);
INSERT INTO timeEntries (startTime, endTime, activity_id, notes) VALUES ('20180618 09:45:12 AM', '20180618 04:34:09 PM', 1, 'Worked on node.js');
INSERT INTO timeEntries (startTime, endTime, activity_id, notes) VALUES ('20180718 10:00:34 AM', '20180718 02:30:12 PM', 1, 'Built a child module');
INSERT INTO timeEntries (startTime, endTime, activity_id, notes) VALUES ('20180718 12:34:56 PM', '20180718 02:30:12 PM', 1, 'Chatted with the boss.');
INSERT INTO timeEntries (startTime, endTime, activity_id, notes) VALUES ('20180618 05:45:12 PM', '20180618 06:34:09 PM', 2, 'Raked some leaves');

-- Insert informaiton for jennaDawg account
INSERT INTO users (email, password) VALUES ('jennaDawg@gmail.com', 'password');
INSERT INTO activities (id, name, user_id) VALUES (3, 'work', 2);
INSERT INTO timeEntries (startTime, endTime, activity_id, notes) VALUES ('20180618 08:30:33 AM', '20180618 06:56:57 PM', 3, 'Bossed around some software developers');