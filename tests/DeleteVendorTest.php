<?php
use PHPUnit\Framework\TestCase;

class DeleteVendorTest extends TestCase {
    public function testDeleteExistingVendor() {
        // Buat data POST dengan vendorID yang ada dalam database
        $_POST = [
            'vendorDetailsVendorID' => '1'
        ];

        // Capture the output of deleteVendor.php
        ob_start();
        include 'model/vendor/deleteVendor.php'; // Ganti path dengan path sebenarnya
        $output = ob_get_clean();

        // Periksa apakah output berisi pesan sukses
        $this->expectOutputString('Vendor deleted.');
    }

    public function testDeleteNonExistingVendor() {
        // Buat data POST dengan vendorID yang tidak ada dalam database
        $_POST = [
            'vendorDetailsVendorID' => '999'
        ];

        // Capture the output of deleteVendor.php
        ob_start();
        include 'model/vendor/deleteVendor.php'; // Ganti path dengan path sebenarnya
        $output = ob_get_clean();

        // Periksa apakah output berisi pesan kesalahan
        $this->expectOutputString("Vendor does not exist in DB. Therefore, can't delete.");
    }

    public function testDeleteVendorMissingID() {
        // Buat data POST tanpa vendorID
        $_POST = [];

        // Capture the output of deleteVendor.php
        ob_start();
        include 'model/vendor/deleteVendor.php'; // Ganti path dengan path sebenarnya
        $output = ob_get_clean();

        // Periksa apakah output berisi pesan kesalahan
        $this->expectOutputString('Please enter the Vendor ID');
    }

    // Tambahkan metode pengujian lainnya sesuai kebutuhan
}
