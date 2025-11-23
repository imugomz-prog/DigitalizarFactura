
-- Tabla de usuarios (Módulo de Autenticación)
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    password VARCHAR(255),
    rol ENUM('Administrador', 'Cajero', 'Propietario') NOT NULL,
    negocio_id INT
);

-- Tabla de clientes
CREATE TABLE clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    identificacion VARCHAR(50),
    telefono VARCHAR(50),
    direccion VARCHAR(150)
);

-- Tabla de productos/servicios
CREATE TABLE productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    codigo VARCHAR(50),
    precio DECIMAL(10,2),
    tipo_impuesto ENUM('IVA', 'ICU', 'RETENCION'),
    porcentaje_impuesto DECIMAL(5,2)
);

-- Tabla de facturas
CREATE TABLE facturas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cliente_id INT,
    usuario_id INT,
    fecha DATETIME DEFAULT CURRENT_TIMESTAMP,
    subtotal DECIMAL(10,2),
    impuesto_total DECIMAL(10,2),
    total DECIMAL(10,2),
    estado ENUM('Borrador', 'Enviada', 'Validada', 'Rechazada') DEFAULT 'Borrador'
);

-- Detalle de facturas
CREATE TABLE factura_detalle (
    id INT AUTO_INCREMENT PRIMARY KEY,
    factura_id INT,
    producto_id INT,
    cantidad INT,
    precio_unitario DECIMAL(10,2),
    impuesto DECIMAL(10,2),
    total_linea DECIMAL(10,2)
);

-- Trazabilidad de envío/validación
CREATE TABLE trazabilidad_factura (
    id INT AUTO_INCREMENT PRIMARY KEY,
    factura_id INT,
    estado VARCHAR(50),
    hash_respuesta VARCHAR(255),
    fecha DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- Configuración del negocio
CREATE TABLE configuracion_negocio (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    nit VARCHAR(20),
    direccion VARCHAR(150),
    correo VARCHAR(100),
    consecutivo_inicial INT
);
