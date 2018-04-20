CREATE DATABASE GolfProject;
CREATE TABLE  Admin(
    IdAdmin int AUTO_INCREMENT,
    UserName varchar(20) not null,
    Password varchar(20) not null,
    PRIMARY KEY (IdAdmin)
    );

  CREATE TABLE Employee(
      IdEmp int AUTO_INCREMENT,
      UserName varchar(20) not null,
      Password varchar(20) NOT null,
      FName varchar(50) not null,
      LName varchar(50) not null,
      UseStatus int,
      Position varchar(20),
      Price DECIMAL(15,2),
      Address varchar(150),
      Birthday date,
      IdCard varchar(13),
      OnlineStatus int,
      ReadyStatus int,
      Phone varchar(10),
      Email varchar(50),
      Exp varchar(255),
      IdAdmin int,
      PRIMARY KEY (IdEmp),
       FOREIGN KEY (IdAdmin) REFERENCES admin(IdAdmin)
      );

      CREATE TABLE Member(
      IdMem int AUTO_INCREMENT,
      UserName varchar(20) not null,
      Password varchar(20)not null,
      FName varchar(50)not null,
      LName varchar(50) not null,
      Address varchar(150),
      Birthday date,
      IdCard varchar(13),
      OnlineStatus int,
      MemPos int,
      Phone varchar(10),
      Email varchar(50),
      PRIMARY KEY (IdMem)
  );
      CREATE TABLE Promotion(
       IdPro int AUTO_INCREMENT,
       DayPro date,
       DisPrice DECIMAL(15,2),
       StartDay date,
       EndDay date,
       PRIMARY KEY (IdPro)
       );

 CREATE TABLE Booking(
  IdBooking int AUTO_INCREMENT , 
  Hole int not null,
  Course varchar(1),
  Person int not null,
  DayBook date,
  Timebook int,
  CaddyNum int,
  InsNum int,
  CarNum int,
  BookStatus int,
  PricePerson int,
  PriceCaddy int,
  PriceCar int,
  PriceIns int,
  fname varchar(50),
  lname varchar(50),
  Phone int,
     IdMem int,
     IdEmp int,
     IdPro int,
  PRIMARY KEY (IdBooking),
     FOREIGN KEY (IdMem) REFERENCES Member(IdMem),
      FOREIGN KEY (IdEmp) REFERENCES Employee(IdEmp),
     FOREIGN KEY (IdPro) REFERENCES Promotion(IdPro)


     
 );
     
    CREATE TABLE Paypal(
  IdPay int AUTO_INCREMENT,
  Price DECIMAL(15,2),
  DayPay datetime,
  PayStatus int,
  DetPay varchar(250),
  IdBooking int,
  PRIMARY KEY (IdPay),
    FOREIGN KEY (IdBooking) REFERENCES Booking(IdBooking)
  );

CREATE TABLE Instrument(
   IdIns int  AUTO_INCREMENT,
   NameIns varchar(10) NOT null,
   InsStatuss int,
   typeIns int,
   Price DECIMAL(15,2),
    IdBooking int,
   PRIMARY KEY (IdIns),
    FOREIGN KEY (IdBooking) REFERENCES Booking(IdBooking)
   );

   CREATE TABLE Rent(
   IdRent int AUTO_INCREMENT,
   NameIns varchar(10) not null,
   RentStatus int,
   IdBooking int not null,
   PRIMARY KEY (IdRent),
   FOREIGN KEY(IdBooking) REFERENCES Booking(IdBooking)
   );
   
   
       
 

