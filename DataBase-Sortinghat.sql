create table Users(
Id int(100) not null unique auto_increment,
firstname varchar(100) not null,
lastname varchar(100) not null,
Gender char(10) not null,
Email varchar(250),
phonenumber bigint(100),
houses_key int,
primary key (Id)
);

create table Houses(
Id int(100) not null unique auto_increment,
description varchar(100) not null,
primary key (Id)
);
-- insert values
insert into Houses(description) values('Gryffindor');
insert into Houses(description) values('Ravenclaw');
insert into Houses(description) values('Slytherin');
insert into Houses(description) values('Hufflepuff');

create table User_House(
Id int(100) not null unique auto_increment,
UsersId int(100) not null,
HousesId int(100) not null,
primary key (Id),
constraint UserHouses_Users foreign key(UsersId) references Users(Id),
constraint UserHouses_Houses foreign key(HousesId) references Houses(Id)
);