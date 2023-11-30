
CREATE DATABASE IF NOT EXISTS libreria;


USE libreria;


CREATE TABLE IF NOT EXISTS libros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255),
    autor VARCHAR(255),
    anio_publicacion INT
);

INSERT INTO libros (titulo, autor, anio_publicacion) VALUES
    ('Libro 1', 'Autor 1', 2020),
    ('Libro 2', 'Autor 2', 2021),
    ('Libro 3', 'Autor 3', 2019);
