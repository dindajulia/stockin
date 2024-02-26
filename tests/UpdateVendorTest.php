<?php
use PHPUnit\Framework\TestCase;

class UpdateVendorTest extends TestCase {
    protected $conn;

    public function setUp(): void {
        // Menginisialisasi koneksi database uji di sini.
        $this->conn = new PDO('mysql:host=localhost;dbname=shop_inventory', 'username', 'password');
    }

    public function testUpdateVendor() {
        // Simulasikan data POST yang akan dikirimkan ke script PHP
        $_POST['vendorDetailsVendorID'] = 1;
        $_POST['vendorDetailsVendorFullName'] = 'NamaVendorBaru';
        $_POST['vendorDetailsVendorMobile'] = '1234567890';
        $_POST['vendorDetailsVendorPhone2'] = '9876543210';
        $_POST['vendorDetailsVendorEmail'] = 'newemail@example.com';
        $_POST['vendorDetailsVendorAddress'] = 'AlamatBaru';
        $_POST['vendorDetailsVendorAddress2'] = 'AlamatBaru2';
        $_POST['vendorDetailsVendorCity'] = 'KotaBaru';
        $_POST['vendorDetailsVendorDistrict'] = 'DaerahBaru';
        $_POST['vendorDetailsStatus'] = 'Active';

        ob_start(); // Menangkap output yang dihasilkan (seperti pesan kesalahan)

        // Jalankan script PHP yang akan diuji
        require 'model/vendor/updateVendorDetails.php';

        ob_end_clean();

        $this->expectOutputString('Vendor details updated.');

    }

    public function tearDown(): void {
        // Tutup koneksi database uji.
        $this->conn = null;
    }
}
