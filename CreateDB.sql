CREATE DATABASE tienda_online;

USE tienda_online;

-- Crear tabla productos
CREATE TABLE productos (
  id INT(11) AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100) NOT NULL,
  descripcion TEXT NOT NULL,
  precio FLOAT NOT NULL,
  imagen VARCHAR(255) NOT NULL,
  categoria_id INT(11) NOT NULL,
  talle VARCHAR(10) NOT NULL
);

-- Crear tabla categorías
CREATE TABLE categorias (
  id INT(11) AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100) NOT NULL
);

-- Crear tabla clientes
CREATE TABLE clientes (
  id INT(11) AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100) NOT NULL,
  email VARCHAR(255) NOT NULL,
  contrasena VARCHAR(255) NOT NULL,
  direccion TEXT NOT NULL,
  metodo_pago VARCHAR(100) NOT NULL
);

-- Crear tabla pedidos
CREATE TABLE pedidos (
  id INT(11) AUTO_INCREMENT PRIMARY KEY,
  cliente_id INT(11) NOT NULL,
  fecha DATETIME NOT NULL,
  estado VARCHAR(100) NOT NULL
);

-- Crear tabla detalle pedido
CREATE TABLE detalles_pedido (
  id INT(11) AUTO_INCREMENT PRIMARY KEY,
  pedido_id INT(11) NOT NULL,
  producto_id INT(11) NOT NULL,
  cantidad INT(11) NOT NULL,
  precio FLOAT NOT NULL
);
