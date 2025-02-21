CREATE DATABASE thecompany_db;

USE thecompany_db;

CREATE TABLE adminlogin_tb(
    a_login_id INT PRIMARY KEY AUTO_INCREMENT,
    a_name VARCHAR(255) NOT NULL,
    a_email VARCHAR(255) NOT NULL,
    a_password VARCHAR(255) NOT NULL
);

CREATE TABLE requesterlogin_db(
    r_login_id INT PRIMARY KEY AUTO_INCREMENT,
    r_name VARCHAR(255) NOT NULL,
    r_email VARCHAR(255) NOT NULL,
    r_password VARCHAR(255) NOT NULL,
    r_contact_num INT(10) NOT NULL,
    r_address VARCHAR(255) NOT NULL
);

CREATE TABLE submitrequest_tb(
	request_id INT PRIMARY KEY AUTO_INCREMENT,
    requester_name VARCHAR(255) NOT NULL,
    requester_address VARCHAR(255) NOT NULL,
    requester_email VARCHAR(255) NOT NULL,
    requester_phone INT(255) NOT NULL,
    request_type VARCHAR(255) NOT NULL,
    request_details VARCHAR(255) NOT NULL
);

