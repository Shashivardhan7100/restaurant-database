
create table customer(
	customer_id int not null AUTO_INCREMENT,
    first_name varchar(20),
    last_name varchar(20),
    Ph_no varchar(30),
    email_id varchar(200),
    address varchar(200),
    gender Varchar(200),
    b_date varchar(30),
    password varchar(30),
    primary key(customer_id)
    );

create table menu(
	item_id int not null AUTO_INCREMENT,
    item_name varchar(30),
    cost int ,
    Rating int,
    img varchar(2000),
    primary key(item_id)
    );
    
create table employee(
	emp_id int not null auto_increment,
    name varchar(30),
    birthdate varchar(10),
    gender varchar(100),
    address varchar(40),
    ph_no varchar(100),
    email_id varchar(200),
    password varchar(100),
    salary int,
    Working_hrs varchar(40),
    start_date date,
    experience varchar(30),
    dept_id int,
    primary key(emp_id)
    );
    
create table orders(
order_id int not null auto_increment,
ocurrent_status varchar(20) default 'accepted',
agentname varchar(200) default 'NULL',
phonenumber varchar(200) default 'NULL',
order_bill int,
ordered_items varchar(200),
ordered_date date,
customer_id int,
emp_id int,
primary key(order_id),
foreign key (customer_id) references customer(customer_id)
	on delete cascade  	on update cascade,
foreign key (emp_id) references employee(emp_id)
	on delete cascade on update cascade
);

create table table_reg(
	reg_id int not null AUTO_INCREMENT,
    tcurrent_status varchar(20) default 'accepted',
    customer_id int,
    customer_name varchar(200),
    total_members int,
    slot varchar(200),
    emp_id int,
    primary key(reg_id),
    foreign key (customer_id) references customer(customer_id)
		on delete set null on update cascade,
	foreign key (emp_id) references employee(emp_id)
		on delete set null on update cascade
        );

create table department(
	dept_id int not null auto_increment,
    dept_name varchar(40),
    appnt_date date,
    manager_id  int,
    primary key(dept_id),
    foreign key (manager_id) references employee(emp_id)
		on delete set null on update cascade
        );
        
create table adds_cart(
	customer_id int ,
    item_id int,
    Is_fav varchar(10),
    foreign key (customer_id) references customer(customer_id)
		on delete cascade on update cascade,
	foreign key (item_id) references menu(item_id)
		on delete cascade on update cascade,
    primary key(customer_id,item_id)
    );
    
create table Rating(
	customer_id int,
    item_id int,
    cus_rating varchar(30),
    review varchar(300),
    foreign key (customer_id) references customer(customer_id)
		on delete cascade on update cascade,
	foreign key (item_id) references menu(item_id)
		on delete cascade on update cascade,
	primary key(customer_id,item_id)
    );
    
alter table employee add foreign key (dept_id) references department(dept_id);
    
 /*   item_id int not null AUTO_INCREMENT,
    item_name varchar(30),
    cost int ,
    Rating int,
    img varchar(20), */
    
    insert into menu(item_name,cost,img) values ('Chicken Quesadillas',400,'product-images\\dish-11.jpg'),
    ('Mutton Rack',900,'product-images\\dish-4.jpg'),('Sea Shrimp',700,'product-images\\dish-5.jpg'),('Chicken Roast',600,'product-images\\dish-6.jpg'),
    ('Chicken Carcass',1100,'product-images\\dish-7.jpg'),('Italian Crabs',750,'product-images\\dish-8.jpg'),('Sea Bass Tartare',600,'product-images\\dish-9.jpg'),
    ('Frittura Paranza',500,'product-images\\dish-10.jpg');
    insert into menu(item_name,cost,img) values ('Cannaby Growy',200,'product-images\\dessert-5.jpg'),
    ('Banana Split',100,'product-images\\dessert-6.jpg'),('Mapple Syrup',135,'product-images\\dessert-7.jpg'),('Choux Pastry',170,'product-images\\dessert-8.jpg'),
    ('Chocolate Brownie',250,'product-images\\dessert-9.jpg'),('PanCake',130,'product-images\\dessert-10.jpg'),('Special Waffle',150,'product-images\\dessert-11.jpg'),
    ('Cinnamon Roll',120,'product-images\\dessert-12.jpg');
    insert into menu(item_name,cost,img) values ('Beer Mug',250,'product-images\\drink-4.jpg'),
    ('Rose Wine',300,'product-images\\drink-2.jpg'),('Fresh Mojito',150,'product-images\\drink-3.jpg'),('Lemon juice',100,'product-images\\drink-1.jpg'),
    ('Spirtz Cocktail',250,'product-images\\drink-5.jpg'),('Iced Tea',100,'product-images\\drink-6.jpg'),('Hugo',250,'product-images\\drink-7.jpg'),
    ('CockTail',300,'product-images\\drink-8.jpg');
    insert into menu(item_name,cost,img) values ('Baguette',200,'product-images\\stater-1.jpg'),
    ('Bruschetta',350,'product-images\\stater-2.jpg'),('Non-Veg Platter',300,'product-images\\stater-3.jpg'),('Rotisserie Chicken',500,'product-images\\stater-4.jpg'),
    ('Cigerette Borek',400,'product-images\\stater-5.jpg'),('Chicken Nuggets',200,'product-images\\stater-6.jpg'),('Spicy Shrimp',300,'product-images\\stater-7.jpg'),
    ('PaniPuri',50,'product-images\\stater-8.jpg');
    
    