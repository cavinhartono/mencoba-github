CREATE TABLE Siswa (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nama_siswa VARCHAR(255) NOT NULL,
  jurusan VARCHAR(255) NOT NULL,
  nilai INT
);

INSERT INTO Siswa(nama_siswa, jurusan, nilai) VALUES
('Cavin Hartono Putra', 'RPL', 1258),
('Calista Hartono Putri', 'MM', 1250),
('Alexander Ricky Hartono', 'MIPA', 1240);