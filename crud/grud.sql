-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-04-2024 a las 17:33:53
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

-- Tabla para administradores
CREATE TABLE Administradores (
    admin_id INT PRIMARY KEY AUTO_INCREMENT,
    nombre NVARCHAR(50),
    apellido NVARCHAR(50),
    email NVARCHAR(100) UNIQUE,
    contraseña NVARCHAR(100)
);

-- Tabla para usuarios
CREATE TABLE Usuarios (
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    nombre NVARCHAR(50),
    apellido NVARCHAR(50),
    email NVARCHAR(100) UNIQUE,
    contraseña NVARCHAR(100),
    fecha_registro DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- Tabla para facturación
CREATE TABLE Facturas (
    factura_id INT PRIMARY KEY AUTO_INCREMENT,
    usuario_id INT,
    fecha DATETIME DEFAULT CURRENT_TIMESTAMP,
    total DECIMAL(10, 2),
    FOREIGN KEY (usuario_id) REFERENCES Usuarios(user_id)
);

-- Tabla para los productos
CREATE TABLE Productos (
    producto_id INT PRIMARY KEY AUTO_INCREMENT,
    nombre NVARCHAR(100),
    descripcion TEXT,
    precio DECIMAL(10, 2)
);

-- Tabla para la relación entre facturas y productos
CREATE TABLE Detalle_Factura (
    detalle_id INT PRIMARY KEY AUTO_INCREMENT,
    factura_id INT,
    producto_id INT,
    cantidad INT,
    precio_unitario DECIMAL(10, 2),
    total_linea DECIMAL(10, 2),
    FOREIGN KEY (factura_id) REFERENCES Facturas(factura_id),
    FOREIGN KEY (producto_id) REFERENCES Productos(producto_id)
);
