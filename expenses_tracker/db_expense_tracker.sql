create table expenses (
id int primary key auto_increment,
title varchar(150) not null,
amount double not null,
description text,
expenses_date timestamp,
created_at timestamp default current_timestamp not null,
updated_at timestamp default current_timestamp not null

);
create table categories(
id int primary key auto_increment,
label varchar(150) not null,
created_at timestamp default current_timestamp not null,
updated_at timestamp default current_timestamp not null

);

insert into categories(label) values ('Food & Categories'), ('Transportation'), ('Entertainment & leisure'), ('Education'), ('Health and Wellness');
select * from categories;
delete from categories where id > 5;
update categories set label = "Entertainment" where id = 3;