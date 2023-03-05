CREATE DATABASE one;
use one;

CREATE TABLE students (
  id INT PRIMARY KEY,
  name VARCHAR(50),
  age INT,
  marks INT
);
--drop table students;
INSERT INTO students (id, name, age, marks)
VALUES
  (1, 'John', 20, 80),
  (2, 'Mary', 21, 90),
  (3, 'Peter', 22, 75),
  (4, 'Lucy', 20, 85);


INSERT INTO students (id, name, age, marks)
VALUES
  (5, 'David', 19, 95);

--SELECT * FROM students;
-- delete student Id
DELETE FROM students WHERE id = 3;
SELECT * FROM students WHERE id = 2;
--SELECT * FROM students;
UPDATE students SET marks = 90 WHERE id = 1;

SELECT * FROM students;

--2


use one;
CREATE TABLE stu(
  id INT PRIMARY KEY,
  name VARCHAR(50),
  age INT,
  marks INT
);

CREATE TABLE teachers (
  id INT PRIMARY KEY,
  name VARCHAR(50),
  department VARCHAR(50)
);

ALTER TABLE stu ADD email VARCHAR(50);
select * from stu;
DROP TABLE teachers;

--select * from teachers;
--3
CREATE DATABASE one;
use one;

CREATE TABLE students (
  id INT PRIMARY KEY,
  name VARCHAR(50),
  age INT,
  marks INT
);
--drop table students;
INSERT INTO students (id, name, age, marks)
VALUES
  (1, 'John', 20, 80),
  (2, 'Mary', 21, 90),
  (3, 'Peter', 22, 75),
  (4, 'Lucy', 20, 85);


INSERT INTO students (id, name, age, marks)
VALUES
  (5, 'David', 19, 95);

--SELECT * FROM students;
-- delete student Id
DELETE FROM students WHERE id = 3;
SELECT * FROM students WHERE id = 2;
--SELECT * FROM students;
UPDATE students SET marks = 90 WHERE id = 1;

SELECT * FROM students;
--4

CREATE TABLE students (
  id INT PRIMARY KEY,
  name VARCHAR(50),
  age INT,
  marks INT
);

INSERT INTO students (id, name, age, marks)
VALUES
  (1, 'John', 20, 80),
  (2, 'Mary', 21, 90),
  (3, 'Peter', 22, 75),
  (4, 'Lucy', 20, 85);

 SELECT age, AVG(marks) FROM students GROUP BY age HAVING AVG(marks) > 80;
 SELECT * FROM students ORDER BY marks DESC;

-- create view : 
CREATE VIEW student_names_and_ages AS
SELECT name, age FROM students;
SELECT * FROM students;

--An index is a data structure that improves the speed of data retrieval operations on a database table
CREATE INDEX marks_index ON students (marks);
SELECT * FROM students;
--5
CREATE TABLE employees (
  id INT PRIMARY KEY,
  name VARCHAR(50),
  department_id INT
);
--drop table employees;

CREATE TABLE departments (
  id INT PRIMARY KEY,
  name VARCHAR(50)
);
--drop table departments;

INSERT INTO employees (id, name, department_id)
VALUES
  (1, 'John', 1),
  (2, 'Mary', 2),
  (3, 'Peter', 1),
  (4, 'Lucy', 3);

INSERT INTO departments (id, name)
VALUES
  (1, 'Sales'),
  (2, 'Marketing'),
  (3, 'Finance');


 -- cartesian product 
 -- return the all possible combination of two table
 SELECT * FROM employees, departments;

 --natarul join
 --SELECT * FROM employees NATURAL JOIN departments;
 --return the rows where the values in two coloumn match
 SELECT * FROM employees INNER JOIN departments ON employees.id = departments.id;
 -- return the all row of left table and matching row right table 
 SELECT * FROM employees LEFT OUTER JOIN departments ON employees.department_id = departments.id;
 -- return the all row of right table matching row of left table 
 SELECT * FROM employees RIGHT OUTER JOIN departments ON employees.department_id = departments.id;

--6
CREATE TABLE studentsss(
  id INT PRIMARY KEY,
  name VARCHAR(50),
  age INT,
  marks INT
);

--drop table studentsss;

INSERT INTO studentsss(id, name, age, marks)
VALUES
  (1, 'John', 20, 80),
  (2, 'Mary', 21, 90),
  (3, 'Peter', 22, 75),
  (4, 'Lucy', 20, 85);


 --SELECT COUNT(*) FROM studentsss WHERE marks > 80; count number of column where marks is geater than 80.
 SELECT COUNT(*) FROM studentsss WHERE marks > 80;

-- SELECT MAX(marks) FROM studentsss;
SELECT MAX(marks) FROM studentsss;

--SELECT MIN(marks) FROM studentsss;
SELECT MIN(marks) FROM studentsss;

--SELECT AVG(marks) FROM studentsss;
SELECT AVG(marks) FROM studentsss;

