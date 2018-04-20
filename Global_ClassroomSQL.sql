


CREATE Table Users(
	User_id VARCHAR(6),
	UName VARCHAR(20),
	Password VARCHAR(20),
	Phone VARCHAR(10),
	Email VARCHAR(20),
	IsTemp VARCHAR(2),
	PRIMARY Key(User_id)

);

CREATE TABLE Staff(
	Staff_id VARCHAR(6),
	S_Name VARCHAR(50) NOT NULL,
	Password VARCHAR(20) NOT NULL,
	Role VARCHAR(10),
	PRIMARY key(Staff_id)
);

CREATE TABLE Rooms(
	Room_id VARCHAR(6),
	Occupancy VARCHAR(2),
	Room_Size VARCHAR(10),
	Description VARCHAR(100),
	Room_name VARCHAR(20),
	Rate DECIMAL(4,2),
	img VARCHAR(50),
	Price DECIMAL(6,2),
	Primary key(Room_id)
);

CREATE TABLE Address(

	Line_1 VARCHAR(20) NOT NULL,
	Line_2 VARCHAR(20),
	Line_3 VARCHAR(20),
	city VARCHAR(15),
	Ad_State VARCHAR(20),
	Post_code VARCHAR(20),
	Country VARCHAR(15),
	UserId VARCHAR(6),
	foreign key(UserId) references Users(user_id)
);

CREATE TABLE BOOKING(
	Booking_id VARCHAR(6),
	Total_Adults INTEGER(2),
	Total_Children INTEGER(2),
	Check_in VARCHAR(10),
	Check_out VARCHAR(10),
	Notes VARCHAR(50),
	User_id VARCHAR(6),
	Total_Cost DECIMAL(6,2),
	Payment_Type VARCHAR(10),
	Payment_Status VARCHAR(10),
	primary key(Booking_id)
);

CREATE TABLE BILLING (
	Transaction_id VARCHAR(6),
	Amt DEC(5,2),
	Booking_id VARCHAR(6),
	Staff_id VARCHAR(6),
	primary key(Transaction_id),
	foreign key(Booking_id) references BOOKING(Booking_id),
	foreign key(Staff_id) references STAFF(Staff_id)
	
);

CREATE TABLE BOOKING_ITEM(
	Booking_id VARCHAR(6),
	Room_id VARCHAR(6),
	foreign key(Booking_id) references BOOKING(Booking_id),
	foreign key(Room_id) references Rooms(Room_id)
);