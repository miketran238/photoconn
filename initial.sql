CREATE TABLE Customers (
customer_id INTEGER PRIMARY KEY,
c_username VARCHAR(20) NOT NULL,
c_firstname   VARCHAR(15) NOT NULL,
c_lastname   VARCHAR(15) NOT NULL,
c_email VARCHAR(30),
c_phone VARCHAR(11)
);

CREATE TABLE Photographers (
photographer_id INTEGER PRIMARY KEY,
p_username VARCHAR(20) NOT NULL,
p_firstname   VARCHAR(15) NOT NULL,
p_lastname   VARCHAR(15) NOT NULL,
p_email VARCHAR(30),
p_phone VARCHAR(11)
);

CREATE TABLE Photos (
photo_id INTEGER PRIMARY KEY,
photographer_id INTEGER NOT NULL,
category VARCHAR(15),
photo_url VARCHAR(100) NOT NULL,
FOREIGN KEY (photographer_id) REFERENCES Photographers(photographer_id)
);

CREATE TABLE Addresses (
address_id INTEGER PRIMARY KEY,
street VARCHAR(20) NOT NULL,
city VARCHAR(20) NOT NULL,
stateInit VARCHAR(2) NOT NULL,
zip INTEGER,
FOREIGN KEY (c_id) REFERENCES Customers(customer_id),
);

CREATE TABLE Orders (
order_id INTEGER PRIMARY KEY,
c_id INTEGER NOT NULL,
order_time TIME,
order_date DATE,
total_price INTEGER NOT NULL,
add_id INTEGER,
FOREIGN KEY (c_id) REFERENCES Customers(customer_id),
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
FOREIGN KEY (c_id) REFERENCES Customers(customer_id),
);

CREATE TABLE Photographers_Bids (
b_id INTEGER,
p_id INTEGER,
PRIMARY KEY (b_id, p_id),
FOREIGN KEY (b_id) REFERENCES Bids(bid_id),
FOREIGN KEY (p_id) REFERENCES Photographers(photographer_id)
);

INSERT INTO Photographers VALUES (1, 'miketran238', 'Mike', 'Tran', 'soulkeeper2389@gmail.com', '4558881234');
INSERT INTO Photographers VALUES (2, 'THEONE', 'Neo', 'Anderson', 'neo12@gmail.com', '0100100011');
INSERT INTO Photographers VALUES (3, 'user', 'Thomas', 'Brad', 'masbrad234@gmail.com', '9095617383');
INSERT INTO Photographers VALUES (4, 'tora', 'Tora', 'Sai', 'toraaaa@gmail.com', '5023468796');
INSERT INTO Photographers VALUES (5, 'daica2', 'Dai', 'Nguyen', 'dainguyen1211@yahoo.com', '09042875566');
INSERT INTO Photographers VALUES (6, 'photographyguy', 'Nick', 'Brown', 'nicky86@gmail.com', '9558975621');
INSERT INTO Photographers VALUES (7, 'zoro', 'Zoro', 'Takeda', 'zorozoro010@gmai.com', '6756696248');
INSERT INTO Customers VALUES (1, 'miketran238', 'Mike', 'Tran', 'soulkeeper2389@gmail.com', '4558881234');
INSERT INTO Customers VALUES (2, 'kiisouk', 'Duy An', 'Nguyen', 'kiisouk1@gmail.com', '4384679982');
INSERT INTO Customers VALUES (3, 'theLegend', 'Legend', 'Kokoro', 'legend1legend2@gmail.com', '5550956755');