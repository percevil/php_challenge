CREATE TABLE employee_table(
    employee_Id int(4) not null PRIMARY KEY AUTO_INCREMENT,
    firstName varchar(20) not null,
    lastName varchar(20) not null,
    email varchar(50) not null
);

INSERT INTO employee_table (employee_Id, firstName, lastName, email) VALUES ('1912', 'Don', 'Ho', 'Dho@gmail.com');