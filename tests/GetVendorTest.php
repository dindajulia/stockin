<?php
use PHPUnit\Framework\TestCase;

class GetVendorTest extends TestCase {
    protected $conn;
    // Menginisialisasi koneksi database uji di sini.
    public function setUp(): void {
        $this->conn = new PDO('mysql:host=localhost;dbname=shop_inventory', 'username', 'password');
    }

    public function testGetVendorData() {
        $vendorNamesSql = 'SELECT * FROM vendor';
        $vendorNamesStatement = $this->conn->prepare($vendorNamesSql);
        $vendorNamesStatement->execute();

        $rowCount = $vendorNamesStatement->rowCount();

        $this->assertGreaterThan(0, $rowCount);

        $vendors = [];
        while ($row = $vendorNamesStatement->fetch(PDO::FETCH_ASSOC)) {
            $vendors[] = $row['fullName'];
        }
    }
}