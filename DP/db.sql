DROP DATABASE Pietka_54519;
CREATE DATABASE Pietka_54519;
CREATE TABLE Pietka_54519.Towar (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(70) NOT NULL,
    price DOUBLE(6, 2)
);

INSERT INTO
    Pietka_54519.Towar (name, price)
VALUES
    ('Książka', 10.99),
    ('Długopis', 1.99),
    ('Zeszyt', 2.99),
    ('Cyrkiel', 0.99),
    ('Kabel koncentryczny', 1.99),
    ('Dysk HD 2TB', 329.95),
    ('Xperia Z3', 1520.22);

CREATE TABLE Pietka_54519.Klient (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(70) NOT NULL,
    town VARCHAR(70) NOT NULL,
    street VARCHAR(70) NOT NULL,
    phone VARCHAR(70) NOT NULL
);

INSERT INTO
    Pietka_54519.Klient (name, town, street, phone)
VALUES
    ('Adam', 'Warszawa', 'Krucza 11', '524678'),
    ('Bartek', 'Kraków', 'Złota 5', '5442341'),
    ('Cezary', 'Wrocław', 'Długa 7', '543678'),
    ('Dawid', 'Poznan', 'Kopernika 2', '543678'),
    ('Ewa', 'Gdansk', 'Jana Pawła 3', '543678'),
    ('Fabian', 'Szczecin', 'Kopernika 5', '543678'),
    ('Gosia', 'Bydgoszcz', 'Kopernika 8', '543678'),
    ('Hania', 'Lublin', 'Kopernika 6', '543678');

CREATE TABLE Pietka_54519.Zamowienie (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_klient INT NOT NULL,
    id_towar INT NOT NULL,
    quantity INT NOT NULL,
    discount TINYINT NOT NULL,
    FOREIGN KEY (id_klient) REFERENCES Pietka_54519.Klient (id),
    FOREIGN KEY (id_towar) REFERENCES Pietka_54519.Towar (id)
);

INSERT INTO
    Pietka_54519.Zamowienie (id_klient, id_towar, quantity, discount)
VALUES
    (2, 6, 1, 5),
    (1, 2, 20, 10),
    (3, 3, 5, 3),
    (4, 4, 1, 4),
    (5, 5, 1, 0),
    (6, 6, 1, 5),
    (8, 6, 1, 0);