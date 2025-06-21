-- Tabel buku
CREATE TABLE IF NOT EXISTS buku (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Judul VARCHAR(255) NOT NULL,
    Penulis VARCHAR(255) NOT NULL,
    Tahun_Terbit INT NOT NULL,
    Harga DECIMAL(10,2) NOT NULL,
    Stok INT NOT NULL
);

-- Tabel pelanggan
CREATE TABLE IF NOT EXISTS pelanggan (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Nama VARCHAR(255) NOT NULL,
    Alamat VARCHAR(255),
    Email VARCHAR(255),
    Telepon VARCHAR(20)
);

-- Tabel pesanan
CREATE TABLE IF NOT EXISTS pesanan (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Tanggal_Pesanan DATE NOT NULL,
    Pelanggan_ID INT NOT NULL,
    Total_Harga DECIMAL(10,2) NOT NULL,
    FOREIGN KEY (Pelanggan_ID) REFERENCES pelanggan(ID)
        ON UPDATE CASCADE
        ON DELETE CASCADE
);

-- Tabel detail_pesanan
CREATE TABLE IF NOT EXISTS detail_pesanan (
    Pesanan_ID INT NOT NULL,
    Buku_ID INT NOT NULL,
    Kuantitas INT NOT NULL,
    Harga_Per_Satuan DECIMAL(10,2) NOT NULL,
    PRIMARY KEY (Pesanan_ID, Buku_ID),
    FOREIGN KEY (Pesanan_ID) REFERENCES pesanan(ID)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    FOREIGN KEY (Buku_ID) REFERENCES buku(ID)
        ON UPDATE CASCADE
        ON DELETE CASCADE
);