<?php
require_once __DIR__ . '/../inc/config/constants.php';
require_once __DIR__ . '/../inc/config/db.php';

class RegisterTest extends \PHPUnit\Framework\TestCase {
    protected $conn;

    public function setUp(): void {
        parent::setUp();

        // Inisialisasi koneksi database (jika diperlukan)
        $this->conn = new PDO(DSN, DB_USER, DB_PASSWORD);
    }

    public function tearDown(): void {
        // Tutup koneksi database (jika diperlukan)
        $this->conn = null;

        parent::tearDown();
    }

    public function testValidRegistration() {
        // Simulasikan data POST dengan kredensial valid
        $_POST['registerFullName'] = 'John Doe';
        $_POST['registerUsername'] = 'johndoe';
        $_POST['registerPassword1'] = 'password';
        $_POST['registerPassword2'] = 'password';
    
        // Include file register.php dan tangkap hasilnya
        ob_start();
        include 'register.php';
        $output = ob_get_clean();
    
        // Lakukan pengujian untuk memeriksa hasil yang dikembalikan
    }

    public function testInvalidRegistrationWithDuplicateUsername() {
        // Simulasikan data POST dengan username yang sudah ada
        $_POST['registerFullName'] = 'John Doe';
        $_POST['registerUsername'] = 'irfan'; // Ini adalah username yang sudah ada
        $_POST['registerPassword1'] = 'password';
        $_POST['registerPassword2'] = 'password';

        ob_start();
        include 'register.php';
        $output = ob_get_clean();

        // Lakukan pengujian untuk pesan yang diharapkan
    }

    public function testInvalidRegistrationWithMismatchedPasswords() {
        // Simulasikan data POST dengan password yang tidak cocok
        $_POST['registerFullName'] = 'John Doe';
        $_POST['registerUsername'] = 'newuser';
        $_POST['registerPassword1'] = 'password1';
        $_POST['registerPassword2'] = 'password2'; // Ini adalah password yang tidak cocok

        ob_start();
        include 'register.php';
        $output = ob_get_clean();

        // Lakukan pengujian untuk pesan yang diharapkan
    }
}