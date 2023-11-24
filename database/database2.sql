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
    Emp_ID INT PRIMARY KEY AUTO_INCREMENT,
    Emp_Name VARCHAR(255),
    Emp_Username VARCHAR(255),
    Emp_Password VARCHAR(255),
    Emp_Email VARCHAR(255),
    Emp_contact VARCHAR(20),
    Emp_Address VARCHAR(255)
);

-- Table to store product details
CREATE TABLE Product (
    ProductID INT PRIMARY KEY,
    ProductCode VARCHAR(2),
    ProductNumber VARCHAR(5),
    ProductName VARCHAR(100),
    ProductPrice VARCHAR(100),
    ProductQuantity INT
    -- Add other product-related fields as needed
);

-- Table to store customer details
CREATE TABLE Customer (
    Cust_ID INT PRIMARY KEY,
    Cust_FirstName VARCHAR(50),
    Cust_LastName VARCHAR(50),
    Cust_Username VARCHAR(50) UNIQUE,
    Cust_Password VARCHAR(50),
    Cust_Email VARCHAR(255),
    Cust_Contact VARCHAR(20),
    Cust_Address VARCHAR(255)
    -- Add other customer-related fields as needed
);

-- Table to store order details
CREATE TABLE Order (
    OrderID INT PRIMARY KEY,
    CustomerID INT,
    OrderNumber VARCHAR(16),
    OrderDate DATE,
    DeliveryType VARCHAR(50),
    Status VARCHAR(50), -- Pending, Dispatched, Delivered, etc.
    -- Add other order-related fields as needed
    FOREIGN KEY (CustomerID) REFERENCES Customer(CustomerID)
);


-- Table to store payment details
CREATE TABLE Payment (
    PaymentID INT PRIMARY KEY,
    OrderID INT,
    PaymentType VARCHAR(50), -- Credit Card, Cheque, VPP, etc.
    Amount DECIMAL(10, 2),
    ClearanceStatus VARCHAR(50), -- Pending, Cleared, etc.
    -- Add other payment-related fields as needed
    FOREIGN KEY (OrderID) REFERENCES Order(OrderID)
);

-- Table to store feedback details
CREATE TABLE Feedback (
    FeedbackID INT PRIMARY KEY,
    CustomerID INT,
    Comment TEXT,
    Rating INT, -- Assuming a rating system (1 to 5)
    -- Add other feedback-related fields as needed
    FOREIGN KEY (CustomerID) REFERENCES Customer(CustomerID)
);

-- Table to store FAQ details
CREATE TABLE FAQ (
    FAQID INT PRIMARY KEY,
    Question TEXT,
    Answer TEXT
    -- Add other FAQ-related fields as needed
);
