create table students(
    id int(11) not null PRIMARY KEY AUTO_INCREMENT,
    name varchar(20) not null,
    rollno int(10) not null,
    email varchar(30) not null,
    gender varchar(10) not null,
    contact varchar(15) not null,
    dob varchar(50) not null,
    branch varchar(20) not null,
    year   varchar(10) not null,
    cgpa varchar(10) not null,
    address varchar(50) not null
);


INSERT INTO students (name, rollno, email, gender, contact, dob, branch, year, cgpa, address) VALUES ('Abhishek Waghmare', 18121001, 'abhishekdwaghmare2000@gmail.com',
 'Male', '9146088240', '2000-06-07', 'Computer Science Engineering', '3rd year', '7.66', 'At.post bhambora,tal-karjat,dist.ahmednagar');