create database eproject;
use eproject;
-- Create Admin Table
CREATE TABLE Admin (
    Ad_ID INT PRIMARY KEY AUTO_INCREMENT,
    Ad_Username VARCHAR(255),
    Ad_Password VARCHAR(255),
    Ad_gmail VARCHAR(255),
    Ad_contact_number VARCHAR(20),
    Ad_Address VARCHAR(255)
);

-- Create Employee Table
CREATE TABLE Employee (
    Emp_ID INT PRIMARY KEY AUTO_INCREMENT,
    Emp_Name VARCHAR(255),
    Emp_Username VARCHAR(255),
    Emp_Password VARCHAR(255),
    Emp_Email VARCHAR(255),
    Emp_contact VARCHAR(20),
    Emp_Address VARCHAR(255)
);

-- Create Product Table
CREATE TABLE Product (
    pro_ID INT PRIMARY KEY AUTO_INCREMENT,
    pro_Code VARCHAR(2),
    pro_Number VARCHAR(5),
    pro_Description VARCHAR(255),
    pro_Price DECIMAL(10, 2),
    pro_WarrantyDetails VARCHAR(255),
    pro_quantity INT
);

-- Create Order Table
CREATE TABLE Orders (
    ord_ID INT PRIMARY KEY AUTO_INCREMENT,
    ord_Number VARCHAR(16),
    cus_ID INT,
    pro_ID INT,
    ord_Date DATE,
    ord_PaymentType VARCHAR(50),
    ord_Dispatched BOOLEAN,
    ord_PaymentStatus VARCHAR(50),
    ord_SatisfactionStatus VARCHAR(50),
    FOREIGN KEY (cus_ID) REFERENCES Customer(cus_ID),
    FOREIGN KEY (pro_ID) REFERENCES Product(pro_ID)
);

-- Create Delivery Table
CREATE TABLE Delivery (
    Del_ID INT PRIMARY KEY AUTO_INCREMENT,
    ord_ID INT,
    Del_Date DATE,
    Del_Type VARCHAR(1),
    Del_Status VARCHAR(255),
    FOREIGN KEY (ord_ID) REFERENCES Orders(ord_ID)
);

-- Create Customer Table
CREATE TABLE Customer (
    cus_ID INT PRIMARY KEY AUTO_INCREMENT,
    cus_Name VARCHAR(255),
    cus_Email VARCHAR(255),
    cus_Address VARCHAR(255),
    cus_Username VARCHAR(255),
    cus_Password VARCHAR(255),
    cus_Registered BOOLEAN,
    cus_AccountDetails VARCHAR(255)
);

-- Create Feedback Table
CREATE TABLE Feedback (
    feed_ID INT PRIMARY KEY AUTO_INCREMENT,
    cus_ID INT,
    ord_ID INT,
    feed_Comment TEXT,
    feed_Rating INT,
    FOREIGN KEY (cus_ID) REFERENCES Customer(cus_ID),
    FOREIGN KEY (ord_ID) REFERENCES Orders(ord_ID)
);

-- Create FAQ Table
CREATE TABLE FAQ (
    faq_ID INT PRIMARY KEY AUTO_INCREMENT,
    faq_Question TEXT,
    faq_Answer TEXT
);
