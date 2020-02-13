CREATE TABLE Users (
user_id INTEGER PRIMARY KEY,
username VARCHAR(20) NOT NULL,
firstname   VARCHAR(15) NOT NULL,
lastname   VARCHAR(15) NOT NULL,
email VARCHAR(30),
phone VARCHAR(11)
);

CREATE TABLE Photos (
photo_id INTEGER PRIMARY KEY,
user_id INTEGER NOT NULL,
category VARCHAR(15),
photo_url VARCHAR(100) NOT NULL,
FOREIGN KEY (user_id) REFERENCES Users(user_id)
);

CREATE TABLE Addresses (
address_id INTEGER PRIMARY KEY,
c_id INTEGER NOT NULL,
street VARCHAR(20) NOT NULL,
city VARCHAR(20) NOT NULL,
stateInit VARCHAR(2) NOT NULL,
zip INTEGER,
FOREIGN KEY (c_id) REFERENCES Users(user_id)
);

CREATE TABLE Orders (
order_id INTEGER PRIMARY KEY,
c_id INTEGER NOT NULL,
order_time TIME,
order_date DATE,
total_price INTEGER NOT NULL,
add_id INTEGER,
FOREIGN KEY (c_id) REFERENCES Users(user_id),
FOREIGN KEY (add_id) REFERENCES Addresses(address_id)
);

CREATE TABLE Order_Items (
o_id INTEGER,
p_id INTEGER,
PRIMARY KEY (o_id, p_id),
items_quantities INTEGER NOT NULL,
FOREIGN KEY (o_id) REFERENCES Orders(order_id),
FOREIGN KEY (p_id) REFERENCES Photos(photo_id)
);

CREATE TABLE Bids (
bid_id INTEGER PRIMARY KEY,
c_id INTEGER NOT NULL,
b_location VARCHAR(50),
bid_date DATE,
bid_time TIME,
price INTEGER NOT NULL,
FOREIGN KEY (c_id) REFERENCES Users(user_id)
);

CREATE TABLE Users_Bids (
b_id INTEGER,
p_id INTEGER,
PRIMARY KEY (b_id, p_id),
FOREIGN KEY (b_id) REFERENCES Bids(bid_id),
FOREIGN KEY (p_id) REFERENCES Users(user_id)
);

INSERT INTO Users VALUES (1, 'miketran238', 'Mike', 'Tran', 'soulkeeper2389@gmail.com', '4558881234');
INSERT INTO Users VALUES (2, 'THEONE', 'Neo', 'Anderson', 'neo12@gmail.com', '0100100011');
DELETE FROM Users WHERE email = 'neo12@gmail.com'; 
INSERT INTO Users VALUES (3, 'user', 'Thomas', 'Brad', 'masbrad234@gmail.com', '9095617383');
INSERT INTO Users VALUES (4, 'tora', 'Tora', 'Sai', 'toraaaa@gmail.com', '5023468796');
UPDATE Users SET username = 'ToraSai09' WHERE user_id = 4;
INSERT INTO Users VALUES (5, 'daica2', 'Dai', 'Nguyen', 'dainguyen1211@yahoo.com', '09042875566');
UPDATE Users SET username = 'DaiNguyen2511' WHERE user_id = 5;
INSERT INTO Users VALUES (6, 'photographyguy', 'Nick', 'Brown', 'nicky86@gmail.com', '9558975621');
INSERT INTO Users VALUES (7, 'zoro', 'Zoro', 'Takeda', 'zorozoro010@gmai.com', '6756696248');
DELETE FROM Users WHERE username = 'zoro';
INSERT INTO Users VALUES (9, 'miketran238', 'Mike', 'Tran', 'soulkeeper2389@gmail.com', '4558881234');
INSERT INTO Users VALUES (10, 'kiisouk', 'Elizabeth', 'Hughes', 'kiisouk1@gmail.com', '');
INSERT INTO Users VALUES (11, 'nightowl', 'Laura', 'Miller', 'nightowl@yahoo.com', '');
INSERT INTO Users VALUES (12, 'theLegend', 'Legend', 'Kokoro', 'legend1legend2@gmail.com', '5550956755');

-- A select query to pull information from a customer based on the user name
SELECT * FROM Users WHERE username = 'miketran238';
-- A select query to get all the photos uploaded by a particular photographer 
SELECT photo_url FROM Photos WHERE user_id = '1';
-- A select query to see all the bids and their prices between a customer and a photographer
SELECT bid_id, price FROM Bids JOIN Users_Bids ON Bids.bid_id = Users_Bids.b_id 
WHERE Bids.c_id = 1 AND Users_Bids.p_id = 1;
