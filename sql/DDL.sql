-- Create Database
CREATE DATABASE iot;

-- Create Table
CREATE TABLE sensor_data (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    d_sensor VARCHAR(10) NOT NULL,
    a_sensor VARCHAR(10) NOT NULL,
    log_time TIMESTAMP
);

-- Insert Data into Table
INSERT INTO sensor_data (d_sensor, a_sensor) VALUES (1, 30);