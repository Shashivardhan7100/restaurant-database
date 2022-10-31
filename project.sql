
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
    primary key(item_id)
    );
    
create table employee(
	emp_id int not null auto_increment,
    name varchar(30),
    address varchar(40),
    ph_no int,
    salary int,
    Working_hrs varchar(40),
    start_date date,
    experience varchar(30),
    dept_id int,
    primary key(emp_id)
    );
    
create table orders(
order_id int not null auto_increment,
ocurrent_status varchar(20),
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
	table_no int not null ,
    tcurrent_status varchar(20) default 'not reserved',
    customer_id int,
    emp_id int,
    primary key(table_no),
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