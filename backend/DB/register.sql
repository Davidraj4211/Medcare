create databse user_DB;

step 2 :-

click on create table and then select sql on the top and copy and paste below code in the query.



    
    CREATE TABLE `user_form1` (
        `id` int(100) NOT NULL AUTO_INCREMENT,
        `First_name` varchar(100) NOT NULL,
        `last_name` varchar(100) NOT NULL,
        `Mobile_Number` varchar(20),
        `email` varchar(100) NOT NULL,
        `password` varchar(100) NOT NULL,
        `Status` enum('active', 'inactive') DEFAULT 'active',
        `remarks` text,
        `entered_by` int(11) DEFAULT '0',
        `entered_date` datetime,
        `updated_by` int(11) DEFAULT '0',
        `updated_date` datetime,
        `last_modified_date_time` timestamp not null default current_timestamp on update current_timestamp,
        PRIMARY KEY (`id`));


insert into user_form (name,email,password) value("david","jardivad@gmail.com","David@123");


create databse user_db;

step 2 :-

click on create table and then select sql on the top and copy and paste below code in the query.



INSERT INTO  user_form (First_name,last_name,Mobile_Number,email,password) values ('$fname','$lname','$email',$mobile','$pass');

insert into user_form (First_name,last_name,Mobile_Number,email,password) values ('$fname','$lname','$email',$mobile','$pass');


insert into user_form (name,email,password,image) value("david","jardivad@gmail.com","David@123",0);