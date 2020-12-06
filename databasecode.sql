use student;
drop table students;
drop table admin;
create table admin(
					admin_id varchar(20) primary key,
                    admin_pass varchar(50)
                    );

select * from admin;
create table students (
					roll_no int primary key,
					stud_name varchar(25) not null,
					email varchar(50),
					gender varchar(1) not null,
					contact bigint not null,
					dob DATE not null,
					branch varchar(10) not null,
					Stud_year  varchar(5) not null,
					cgpa Decimal (2, 2) not null,
					address varchar(150) not null
					);
select * from students;

#we have selected 3major points with the database 
# 2. editing or modify column data
# 1. adding new row or student information to the database
# 3. login for admin which will only have a single row 
describe students;


#1 adding new row or student information to the database
#INSERT into students Values( 18121002, 'raviraj dnyanoba kukade', 'ravirajkukade11@gmail.com', 'M', 9359330237, '2000-07-29', 'computer', 'TE', 00.00, 'dkfjhbkjsbfkjsbvirwfj');
#2 editing or modifying column data
#SET var1 = 'value'
#where var1 = 'original value';

#3. login will have a single row 
INSERT into admin values('cryptic_creature123', 'makeno use of makeup@1234567789!@');
