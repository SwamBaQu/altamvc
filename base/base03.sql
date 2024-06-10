CREATE TABLE Personas (
    ID int NOT NULL AUTO_INCREMENT,
    Nombre varchar(255) NOT NULL,
    Apellido varchar(255) NOT NULL,
    Correo varchar(255),
    FechaNacimiento date,  -- Cambiado de date a datetime
    Telefono varchar(20),
    Genero char(1),
    Pais varchar(255),
    PRIMARY KEY (ID)
);