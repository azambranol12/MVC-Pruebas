CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    contrasenia VARCHAR(255) NOT NULL
);

INSERT INTO usuarios (nombre, contrasenia) VALUES
('admin', 'admin123'),
('juan', 'juanpass'),
('maria', 'maria2024'),
('pedro', 'pedro123'),
('lucia', 'lucia456');
