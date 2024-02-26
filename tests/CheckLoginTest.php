<?php
class CheckLoginTest extends \PHPUnit\Framework\TestCase {
    
        protected $conn;

        public function testValidLogin() {
            $connMock = $this->createMock(PDO::class);
            $statementMock = $this->createMock(PDOStatement::class);

            // Mock statement untuk menyatakan bahwa hasil adalah satu baris (pengguna ditemukan)
            $statementMock->method('rowCount')->willReturn(1);

            // Mengatur statement untuk mengembalikan data pengguna palsu
            $userRow = ['fullName' => 'John Doe']; // Ganti dengan data palsu sesuai struktur tabel Anda
            $statementMock->method('fetch')->willReturn($userRow);

            // Mock objek PDO untuk mengembalikan objek statement palsu
            $connMock->method('prepare')->willReturn($statementMock);

            // Menggantikan koneksi database dengan koneksi palsu selama pengujian
            $this->conn = $connMock;

            // Simulasikan input POST
            $_POST['loginUsername'] = 'irfan';
            $_POST['loginPassword'] = '123456';

            // Mulai output buffering untuk menangkap pesan
            ob_start();
            include 'checkLogin.php';
            $output = ob_get_clean();
        }
}