
CREATE Table Users(
	User_id VARCHAR(6) NOT NULL,
	UName VARCHAR(20) UNIQUE,
	Password VARCHAR(20) NOT NULL,
	Phone VARCHAR(10),
	Email VARCHAR(20) UNIQUE,
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
	Total_Adults INTEGER(2),
	Total_Children INTEGER(2),
	Check_in date NOT NULL,
	Check_out date NOT NULL,
	Booking_Date timestamp,
	Notes VARCHAR(50),
	User_id VARCHAR(6),
	Total_Cost DECIMAL(6,2),
	Payment_Type VARCHAR(10),
	Payment_Status VARCHAR(10),
	primary key(Booking_id)
);

CREATE TABLE BILLING (
	Transaction_id VARCHAR(6),
	Payment_date VARCHAR(10),
	Amt DECIMAL(5,2),
	Booking_id VARCHAR(6),
	Staff_id VARCHAR(6) NOT NULL,
	User_id VARCHAR(6) NOT NULL,
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
	IMGlink varchar(50),
	Name varchar(50),
	Address varchar(50),
	Url Varchar(50) UNIQUE,
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

INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R0','N','Deluxe','Larger Room','Deluxe-0',1.0,'temp.png',200);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R1','N','King Suite','Extra Large Room','King Suite-1',1.0,'temp.png',300);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R2','N','Deluxe','Larger Room','Deluxe-2',1.0,'temp.png',200);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R3','N','Deluxe','Larger Room','Deluxe-3',1.0,'temp.png',200);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R4','N','King Suite','Extra Large Room','King Suite-4',1.0,'temp.png',300);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R5','N','King Suite','Extra Large Room','King Suite-5',1.0,'temp.png',300);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R6','N','King Suite','Extra Large Room','King Suite-6',1.0,'temp.png',300);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R7','N','Single','Standard Room','Single-7',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R8','N','Deluxe','Larger Room','Deluxe-8',1.0,'temp.png',200);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R9','N','Single','Standard Room','Single-9',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R10','N','Single','Standard Room','Single-10',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R11','N','Single','Standard Room','Single-11',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R12','N','Deluxe','Larger Room','Deluxe-12',1.0,'temp.png',200);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R13','N','Single','Standard Room','Single-13',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R14','N','Deluxe','Larger Room','Deluxe-14',1.0,'temp.png',200);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R15','N','Single','Standard Room','Single-15',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R16','N','Single','Standard Room','Single-16',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R17','N','Single','Standard Room','Single-17',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R18','N','Single','Standard Room','Single-18',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R19','N','Deluxe','Larger Room','Deluxe-19',1.0,'temp.png',200);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R20','N','Single','Standard Room','Single-20',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R21','N','Deluxe','Larger Room','Deluxe-21',1.0,'temp.png',200);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R22','N','Single','Standard Room','Single-22',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R23','N','Deluxe','Larger Room','Deluxe-23',1.0,'temp.png',200);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R24','N','Single','Standard Room','Single-24',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R25','N','Single','Standard Room','Single-25',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R26','N','Deluxe','Larger Room','Deluxe-26',1.0,'temp.png',200);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R27','N','Single','Standard Room','Single-27',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R28','N','Deluxe','Larger Room','Deluxe-28',1.0,'temp.png',200);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R29','N','Single','Standard Room','Single-29',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R30','N','Deluxe','Larger Room','Deluxe-30',1.0,'temp.png',200);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R31','N','Single','Standard Room','Single-31',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R32','N','Deluxe','Larger Room','Deluxe-32',1.0,'temp.png',200);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R33','N','Single','Standard Room','Single-33',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R34','N','Single','Standard Room','Single-34',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R35','N','Deluxe','Larger Room','Deluxe-35',1.0,'temp.png',200);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R36','N','Single','Standard Room','Single-36',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R37','N','Deluxe','Larger Room','Deluxe-37',1.0,'temp.png',200);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R38','N','Deluxe','Larger Room','Deluxe-38',1.0,'temp.png',200);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R39','N','Deluxe','Larger Room','Deluxe-39',1.0,'temp.png',200);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R40','N','Deluxe','Larger Room','Deluxe-40',1.0,'temp.png',200);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R41','N','Single','Standard Room','Single-41',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R42','N','Deluxe','Larger Room','Deluxe-42',1.0,'temp.png',200);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R43','N','Deluxe','Larger Room','Deluxe-43',1.0,'temp.png',200);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R44','N','Single','Standard Room','Single-44',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R45','N','Single','Standard Room','Single-45',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R46','N','Single','Standard Room','Single-46',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R47','N','Single','Standard Room','Single-47',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R48','N','Deluxe','Larger Room','Deluxe-48',1.0,'temp.png',200);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R49','N','Deluxe','Larger Room','Deluxe-49',1.0,'temp.png',200);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R50','N','Single','Standard Room','Single-50',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R51','N','Single','Standard Room','Single-51',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R52','N','Single','Standard Room','Single-52',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R53','N','Single','Standard Room','Single-53',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R54','N','Deluxe','Larger Room','Deluxe-54',1.0,'temp.png',200);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R55','N','Deluxe','Larger Room','Deluxe-55',1.0,'temp.png',200);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R56','N','Single','Standard Room','Single-56',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R57','N','Deluxe','Larger Room','Deluxe-57',1.0,'temp.png',200);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R58','N','Single','Standard Room','Single-58',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R59','N','Single','Standard Room','Single-59',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R60','N','Single','Standard Room','Single-60',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R61','N','Single','Standard Room','Single-61',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R62','N','Single','Standard Room','Single-62',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R63','N','Single','Standard Room','Single-63',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R64','N','Single','Standard Room','Single-64',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R65','N','Single','Standard Room','Single-65',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R66','N','Deluxe','Larger Room','Deluxe-66',1.0,'temp.png',200);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R67','N','Single','Standard Room','Single-67',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R68','N','Single','Standard Room','Single-68',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R69','N','Single','Standard Room','Single-69',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R70','N','Deluxe','Larger Room','Deluxe-70',1.0,'temp.png',200);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R71','N','Deluxe','Larger Room','Deluxe-71',1.0,'temp.png',200);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R72','N','Deluxe','Larger Room','Deluxe-72',1.0,'temp.png',200);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R73','N','Deluxe','Larger Room','Deluxe-73',1.0,'temp.png',200);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R74','N','Deluxe','Larger Room','Deluxe-74',1.0,'temp.png',200);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R75','N','Deluxe','Larger Room','Deluxe-75',1.0,'temp.png',200);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R76','N','Single','Standard Room','Single-76',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R77','N','Deluxe','Larger Room','Deluxe-77',1.0,'temp.png',200);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R78','N','Single','Standard Room','Single-78',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R79','N','Single','Standard Room','Single-79',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R80','N','Single','Standard Room','Single-80',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R81','N','Single','Standard Room','Single-81',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R82','N','Deluxe','Larger Room','Deluxe-82',1.0,'temp.png',200);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R83','N','Single','Standard Room','Single-83',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R84','N','Deluxe','Larger Room','Deluxe-84',1.0,'temp.png',200);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R85','N','Single','Standard Room','Single-85',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R86','N','Single','Standard Room','Single-86',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R87','N','Single','Standard Room','Single-87',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R88','N','Single','Standard Room','Single-88',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R89','N','Single','Standard Room','Single-89',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R90','N','Single','Standard Room','Single-90',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R91','N','Deluxe','Larger Room','Deluxe-91',1.0,'temp.png',200);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R92','N','Deluxe','Larger Room','Deluxe-92',1.0,'temp.png',200);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R93','N','Deluxe','Larger Room','Deluxe-93',1.0,'temp.png',200);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R94','N','Single','Standard Room','Single-94',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R95','N','Deluxe','Larger Room','Deluxe-95',1.0,'temp.png',200);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R96','N','Deluxe','Larger Room','Deluxe-96',1.0,'temp.png',200);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R97','N','Single','Standard Room','Single-97',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R98','N','Deluxe','Larger Room','Deluxe-98',1.0,'temp.png',200);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R99','N','Single','Standard Room','Single-99',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R100','N','Single','Standard Room','Single-100',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R101','N','Single','Standard Room','Single-101',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R102','N','Single','Standard Room','Single-102',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R103','N','Single','Standard Room','Single-103',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R104','N','Single','Standard Room','Single-104',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R105','N','Single','Standard Room','Single-105',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R106','N','Single','Standard Room','Single-106',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R107','N','Single','Standard Room','Single-107',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R108','N','Deluxe','Larger Room','Deluxe-108',1.0,'temp.png',200);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R109','N','Single','Standard Room','Single-109',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R110','N','Single','Standard Room','Single-110',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R111','N','Single','Standard Room','Single-111',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R112','N','Single','Standard Room','Single-112',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R113','N','Single','Standard Room','Single-113',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R114','N','Single','Standard Room','Single-114',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R115','N','Single','Standard Room','Single-115',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R116','N','Deluxe','Larger Room','Deluxe-116',1.0,'temp.png',200);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R117','N','Single','Standard Room','Single-117',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R118','N','Single','Standard Room','Single-118',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R119','N','Deluxe','Larger Room','Deluxe-119',1.0,'temp.png',200);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R120','N','Single','Standard Room','Single-120',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R121','N','Single','Standard Room','Single-121',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R122','N','Deluxe','Larger Room','Deluxe-122',1.0,'temp.png',200);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R123','N','Single','Standard Room','Single-123',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R124','N','Single','Standard Room','Single-124',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R125','N','Single','Standard Room','Single-125',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R126','N','Single','Standard Room','Single-126',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R127','N','Single','Standard Room','Single-127',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R128','N','Single','Standard Room','Single-128',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R129','N','Single','Standard Room','Single-129',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R130','N','Single','Standard Room','Single-130',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R131','N','Deluxe','Larger Room','Deluxe-131',1.0,'temp.png',200);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R132','N','Single','Standard Room','Single-132',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R133','N','Deluxe','Larger Room','Deluxe-133',1.0,'temp.png',200);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R134','N','Deluxe','Larger Room','Deluxe-134',1.0,'temp.png',200);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R135','N','Deluxe','Larger Room','Deluxe-135',1.0,'temp.png',200);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R136','N','Single','Standard Room','Single-136',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R137','N','Deluxe','Larger Room','Deluxe-137',1.0,'temp.png',200);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R138','N','Single','Standard Room','Single-138',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R139','N','Deluxe','Larger Room','Deluxe-139',1.0,'temp.png',200);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R140','N','Single','Standard Room','Single-140',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R141','N','Single','Standard Room','Single-141',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R142','N','Deluxe','Larger Room','Deluxe-142',1.0,'temp.png',200);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R143','N','Single','Standard Room','Single-143',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R144','N','Single','Standard Room','Single-144',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R145','N','Single','Standard Room','Single-145',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R146','N','Deluxe','Larger Room','Deluxe-146',1.0,'temp.png',200);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R147','N','Single','Standard Room','Single-147',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R148','N','Single','Standard Room','Single-148',1.0,'temp.png',100);
INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES('R149','N','Single','Standard Room','Single-149',1.0,'temp.png',100);
