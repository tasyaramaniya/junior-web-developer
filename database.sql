CREATE DATABASE webtoko;

USE webtoko;

CREATE TABLE barang (
	ID VARCHAR(6) PRIMARY KEY,
    Kategori VARCHAR(50),
    Nama_Barang VARCHAR(100),
    Harga INT,
    Stok INT,
    Supplier VARCHAR(50)
);

INSERT INTO barang
VALUES 
("BR1001", "Makanan", "Krupuk Ikan", 25000, 60, "PD Idola Snack"),
("BR1002", "Makanan", "Keripik Singkong", 15000, 60, "PD Idola Snack"),
("BR2001", "Kosmetik", "Sabun Herbal", 10000, 40, "Herborist"),
("BR2002", "Kosmetik", "Masker Spirulina", 17000, 40, "Herborist"),
("BR3001", "Aksesoris", "Jam Tangan Kayu Pria", 320000, 15, "Indocraft"),
("BR3002", "Aksesoris", "Jam Tangan Kayu Wanita", 270000, 20, "Indocraft"),
("BR3003", "Aksesoris", "Kalung Etnik", 175000, 10, "Indocraft");


SELECT * FROM barang;

CREATE TABLE supplier(
	ID_Supplier VARCHAR(4) PRIMARY KEY,
    Nama VARCHAR(100),
    Alamat VARCHAR(100),
    Kota VARCHAR(30),
    Telepon VARCHAR(15)
);

INSERT INTO supplier 
VALUES 
("SP01", "PD Idola Snack", "Jl. Kud - Sukadami", "Bekasi", "085693725494"),
("SP02", "Herborist", "Jl Daan Mogot Km.11", "Jakarta", "021-54368111"),
("SP03", "Indocraft", "Jl. Raya Mas No. 47", "Bali", "0361-973091");

SELECT * FROM supplier;

CREATE TABLE gerai(
	ID_Gerai VARCHAR(2) PRIMARY KEY,
    Nama VARCHAR(100),
    Alamat VARCHAR(100),
    Kota VARCHAR(30),
    Telepon INT
);

INSERT INTO gerai  
VALUES 
("G1", "Gerai Dago", "Jl. Ir Hj Djuanda 115", "Bandung", "0227206678"),
("G2", "Gerai Soekarno Hatta", "Jl Soekarno Hatta 21", "Bandung", "0227507283"),
("G3", "Gerai Gatot Subroto", "Jl. Gatot Subroto 15", "Bandung", "0227497644");

SELECT * FROM gerai;