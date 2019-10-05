use photo_slider;

drop table photos;
create table photos(
id int not null auto_increment,
photo varchar(30),
primary key(id));

insert into photos(photo) values("1.png");
insert into photos(photo) values("2.png");
insert into photos(photo) values("3.png");
insert into photos(photo) values("4.png");
insert into photos(photo) values("5.png");
insert into photos(photo) values("6.png");
insert into photos(photo) values("7.png");
insert into photos(photo) values("8.png");
insert into photos(photo) values("9.png");
insert into photos(photo) values("10.png");
insert into photos(photo) values("11.png");
insert into photos(photo) values("12.png");
insert into photos(photo) values("13.png");
insert into photos(photo) values("14.png");
insert into photos(photo) values("15.png");
insert into photos(photo) values("16.png");
insert into photos(photo) values("17.png");
insert into photos(photo) values("18.png");
insert into photos(photo) values("19.png");
insert into photos(photo) values("20.png");
insert into photos(photo) values("21.png");

select * from photos;