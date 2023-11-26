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

-- Table to store employee details
CREATE TABLE Employee (
    Emp_ID INT PRIMARY KEY AUTO_INCREMENT ,
    Emp_Name VARCHAR(255),
    Emp_Username VARCHAR(255),
    Emp_Password VARCHAR(255),
    Emp_Email VARCHAR(255),
    Emp_contact VARCHAR(20),
    Emp_Address VARCHAR(255)
);

-- Table to store product details
CREATE TABLE Product (
    ProductID INT PRIMARY KEY AUTO_INCREMENT,
    ProductCode VARCHAR(2),
    ProductNumber VARCHAR(5),
    ProductName VARCHAR(100),
    ProductPrice VARCHAR(100),
    ProductImageName VARCHAR(100),
    ProductImageType VARCHAR(100),
    ProductQuantity INT
    -- Add other product-related fields as needed
);

-- Table to store customer details
CREATE TABLE Customer (
    Cust_ID INT PRIMARY KEY AUTO_INCREMENT,
    Cust_FirstName VARCHAR(50),
    Cust_LastName VARCHAR(50),
    Cust_Username VARCHAR(50) UNIQUE,
    Cust_Password VARCHAR(50),
    Cust_Email VARCHAR(255),
    Cust_Contact VARCHAR(20),
    Cust_Address VARCHAR(255)
    -- Add other customer-related fields as needed
);

-- Table to store Orders details
CREATE TABLE Orders (
    OrdersID INT PRIMARY KEY AUTO_INCREMENT,
    Cust_ID INT,
    OrdersNumber VARCHAR(16),
    OrdersDate DATE,
    DeliveryType VARCHAR(50),
    Status VARCHAR(50), -- Pending, Dispatched, Delivered, etc.
    -- Add other Orders-related fields as needed
    FOREIGN KEY (Cust_ID) REFERENCES Customer(Cust_ID)
);


-- Table to store payment details
CREATE TABLE Payment (
    PaymentID INT PRIMARY KEY AUTO_INCREMENT,
    OrdersID INT,
    PaymentType VARCHAR(50), -- Credit Card, Cheque, VPP, etc.
    Amount DECIMAL(10, 2),
    ClearanceStatus VARCHAR(50), -- Pending, Cleared, etc.
    -- Add other payment-related fields as needed
    FOREIGN KEY (OrdersID) REFERENCES Orders(OrdersID)
);

-- Table to store feedback details
CREATE TABLE Feedback (
    FeedbackID INT PRIMARY KEY AUTO_INCREMENT,
    Cust_ID INT,
    Comment TEXT,
    Rating INT, -- Assuming a rating system (1 to 5)
    -- Add other feedback-related fields as needed
    FOREIGN KEY (Cust_ID) REFERENCES Customer(Cust_ID)
);

-- Table to store FAQ details
CREATE TABLE FAQ (
    FAQID INT PRIMARY KEY AUTO_INCREMENT,
    Question TEXT,
    Answer TEXT
    -- Add other FAQ-related fields as needed
);
