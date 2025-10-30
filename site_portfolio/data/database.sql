-- database.sql
-- SQL script to create the portfolio website database

CREATE DATABASE IF NOT EXISTS portfolio_db;
USE portfolio_db;

-- Table for registered users
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Table for counting site visits
CREATE TABLE IF NOT EXISTS visits (
    id INT AUTO_INCREMENT PRIMARY KEY,
    ip_address VARCHAR(50),
    visit_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Optional example record (for testing)
INSERT INTO users (username, password)
VALUES ('testuser', MD5('1234'));