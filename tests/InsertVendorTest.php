<?php
use PHPUnit\Framework\TestCase;

class InsertVendorTest extends TestCase {
    
    public function testInsertVendorSuccess() {
        // Buat data POST yang valid sesuai dengan permintaan dari insertVendor.php
        $_POST = [
            'vendorDetailsVendorFullName' => 'John Doe',
            'vendorDetailsVendorMobile' => '1234567890',
            'vendorDetailsVendorAddress' => '123 Main St',
            'vendorDetailsStatus' => 'Active'
        ];

        // Capture the output of insertVendor.php
        ob_start();
        include 'model/vendor/insertVendor.php'; // Ganti path dengan path sebenarnya
        $output = ob_get_clean();

        // Periksa apakah output berisi pesan sukses
        $this->expectOutputString('Vendor added to database');
    }

    public function testInsertVendorInvalidMobile() {
        // Buat data POST dengan nomor telepon yang tidak valid
        $_POST = [
            'vendorDetailsVendorFullName' => 'John Doe',
            'vendorDetailsVendorMobile' => 'invalidmobile',
            'vendorDetailsVendorAddress' => '123 Main St',
            'vendorDetailsStatus' => 'Active'
        ];

        // Capture the output of insertVendor.php
        ob_start();
        include 'model/vendor/insertVendor.php'; // Ganti path dengan path sebenarnya
        $output = ob_get_clean();

        // Periksa apakah output berisi pesan kesalahan
        $this->expectOutputString('Please enter a valid phone number');
    }

    public function testInsertVendorMissingFields() {
        // Buat data POST yang tidak lengkap
        $_POST = [
            'vendorDetailsVendorFullName' => 'John Doe',
            'vendorDetailsVendorMobile' => '1234567890',
            'vendorDetailsStatus' => 'Active'
        ];

        // Capture the output of insertVendor.php
        ob_start();
        include 'model/vendor/insertVendor.php'; // Ganti path dengan path sebenarnya
        $output = ob_get_clean();

        // Periksa apakah output berisi pesan kesalahan
        $this->expectOutputString('Please enter all fields marked with a (*)');
    }

    // Tambahkan metode pengujian lainnya sesuai kebutuhan
}
