


CREATE Table Users(
	User_id VARCHAR(6) NOT NULL,
	UName VARCHAR(20) UNIQUE,
	Password VARCHAR(20) NOT NULL,
	Phone VARCHAR(10),
	Email VARCHAR(20) UNIQUE check(Email LIKE "%@%"),
	IsTemp VARCHAR(2) NOT NULL,
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
	Occupancy VARCHAR(2) check(Occupancy LIKE "Y" or Occupancy like "N"),
	Room_Size VARCHAR(10) check(Room_Size IN("Single","Deluxe","King Suite")),
	Description VARCHAR(100),
	Room_name VARCHAR(20),
	Rate DECIMAL(4,2),
	img VARCHAR(50) check(img IN("%.jpg","%.gif","%.mpg","%.png")),
	Price DECIMAL(6,2),
	Primary key(Room_id)
);

CREATE TABLE Address(

	Line_1 VARCHAR(20) NOT NULL,
	Line_2 VARCHAR(20) NOT NULL,
	Line_3 VARCHAR(20),
	city VARCHAR(15) NOT NULL,
	Ad_State VARCHAR(20)NOT NULL,
	Post_code VARCHAR(20)NOT NULL,
	Country VARCHAR(15),
	UserId VARCHAR(6),
	foreign key(UserId) references Users(user_id)
);

CREATE TABLE BOOKING(
	Booking_id VARCHAR(6),
	Booking_date TIMESTAMP,
	Total_Adults INTEGER(2),
	Total_Children INTEGER(2),
	Check_in DATE NOT NULL,
	Check_out DATE NOT NULL,
	Notes VARCHAR(50),
	User_id VARCHAR(6),
	Total_Cost DECIMAL(6,2),
	deposit DEC(6,2)
	Payment_Type VARCHAR(10) check Payment_Type in("Card","Cash","Online"),
	Payment_Status VARCHAR(10) check Payment_Status in("paid","unpaid"),
	primary key(Booking_id)
);

CREATE TABLE BILLING (
	Transaction_id VARCHAR(6),
	Payment_date VARCHAR(10),
	Amt DEC(5,2),
	Booking_id VARCHAR(6),
	Staff_id VARCHAR(6) NOT NULL,
	User_id VARCHAR(6) NOT NULL
	primary key(Transaction_id),
	foreign key(Booking_id) references BOOKING(Booking_id),
	foreign key(Staff_id) references STAFF(Staff_id),
	foreign key(User_id) references USERS(User_id)
);

CREATE TABLE BOOKING_ITEM(
	Booking_id VARCHAR(6),
	Room_id VARCHAR(6),
	foreign key(Booking_id) references BOOKING(Booking_id),
	foreign key(Room_id) references Rooms(Room_id)
);

CREATE TABLE ATTRACTIONS(
	AttractionID VARCHAR(6),
	IMGlink varchar(50) check(IMGlink IN("%.jpg","%.gif","%.mpg","%.png")),
	Name varchar(50),
	Address varchar(50),
	Url Varchar(50) UNIQUE check URL like "http://%",
	Primary Key(AttractionID)
	
);

CREATE TABLE FACILITIES(
	FacID VARCHAR(6),
	Name VARCHAR(30),
	availFrom VARCHAR(10),
	availTo VARCHAR(10),
	Contact_Point VARCHAR(6),
	amt_free INT(2) NOT NULL,
	PRIMARY KEY(FacID),
	foreign key(contact_point) references staff(Staff_id)
);

CREATE TABLE FacilityBooking(
	User_id VARCHAR(6),
	Room_id VARCHAR(6),
	FacID VARCHAR(6),
	BookedFrom VARCHAR(10) NOT NULL,
	BookedTo VARCHAR(10) NOT NULL,
	FOREIGN KEY(User_id) references Users(User_id),
	FOREIGN KEY(Room_id) references Rooms(Room_id),
	FOREIGN KEY(FacID) references FACILITIES(FacID)
);
