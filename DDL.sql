CREATE DATABASE db_ukom26_aspirasi

CREATE TABLE tb_kelas(
    id_kelas INT AUTO_INCREMENT PRIMARY KEY,
    nama_kelas VARCHAR(100) NOT NULL,
    tahun_ajaran VARCHAR(15) NOT NULL, -->2025/2026
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
);

CREATE TABLE tb_users(
    id_users INT AUTO_INCREMENT PRIMARY KEY,
    nis VARCHAR(15) NOT NULL,
    nama VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(50) NOT NULL,
    jenis_kelamin ENUM('L','P'),
    role ENUM('admin','user'),
    id_kelas INT,
    CONSTRAINT UNIQUE(nis),
    CONSTRAINT UNIQUE(email),
    CONSTRAINT fk_kelas
        FOREIGN KEY id_kelas
        REFERENCES tb_kelas(id_kelas)
        ON DELETE CASCADE,
        
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE tb_kategori(
    id_kategori INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
);

CREATE TABLE tb_aspirasi (
    id_aspirasi INT AUTO_INCREMENT PRIMARY KEY,
    id_user INT,
    id_kategori INT,
    lokasi VARCHAR(100) NOT NULL,
    isi_aspirasi TEXT NOT NULL,
    status ENUM('menunggu','proses','selesai'),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    CONSTRAINT fk_user
        FOREIGN KEY (id_user)
        REFERENCES tb_users(id_user)
        ON DELETE CASCADE,

    CONSTRAINT fk_kategori
        FOREIGN KEY (id_kategori)
        REFERENCES tb_kategori(id_kategori)
        ON DELETE CASCADE
);

CREATE TABLE tb_feedback (
    id_feedback INT AUTO_INCREMENT PRIMARY KEY,
    id_user INT,
    id_aspirasi INT,
    isi_feedback TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    CONSTRAINT fk_users
        FOREIGN KEY (id_user)
        REFERENCES tb_users(id_user)
        ON DELETE CASCADE,

    CONSTRAINT fk_aspirasi
        FOREIGN KEY (id_aspirasi)
        REFERENCES tb_aspirasi(id_aspirasi)
        ON DELETE CASCADE
);