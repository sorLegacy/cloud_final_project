CREATE DATABASE IF NOT EXISTS student_data;
use student_data;

create table students(student_id int primary key,
 fname varchar(30)not null,
lname varchar(30) not null,
cgpa float ,
age int);

create table courses(course_code int primary key,
 course_name varchar(30)not null);
 
 create table enrollment(student_id int,
course_code int ,
course_degree int,
 foreign key (student_id) references students(student_id),
 foreign key (course_code) references courses(course_code) );
 
 create table instructor(instructor_id int primary key,
 fname varchar(30)not null,
lname varchar(30) not null,
salary float ,
age int);

create table classORsection(class_id int primary key,
course_code int ,
instructor_id int,
 foreign key (instructor_id) references instructor(instructor_id),
 foreign key (course_code) references courses(course_code) );
INSERT INTO students (student_id, fname, lname, cgpa, age) VALUES
(22010313, 'ahmed', 'hassan', 3.5, 21),
(22010012, 'ahmed', 'eslam', 3.8, 20),
(22010173,'omar','nouh',3.5,20),
(22010062, 'ayman', 'rizk', 3.8, 20),
(22010053,'akram','yasser',3.5,21);

INSERT INTO courses (course_code, course_name) VALUES
(101, 'Mathematics'),
(102, 'Physics'),
(103, 'Computer Science');

INSERT INTO enrollment (student_id, course_code, course_degree) VALUES
(22010313, 101, 95),  
(22010313, 102, 86),  
(22010012, 101, 95),
(22010012, 102, 86),  
(22010173, 102, 88),  
(22010173, 103, 94),
(22010053, 101, 97),  
(22010053, 103, 85),  
(22010062, 102, 95),
(22010313, 103, 87);

INSERT INTO instructor (instructor_id, fname, lname, salary, age) VALUES
(1, 'Michael', 'Johnson', 50000, 35),
(2, 'Emily', 'Davis', 60000, 40),
(3,'stephen','curry',10000,36);

INSERT INTO classORsection (class_id, course_code, instructor_id) VALUES
(1, 101, 1), 
(2, 103, 3),  
(3, 102, 2); 

