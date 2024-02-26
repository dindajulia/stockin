<?php
use PHPUnit\Framework\TestCase;

class ConstantsTest extends TestCase {
    
    public function testRootUrlConstant() {
        // Periksa apakah konstanta ROOT_URL ada dan bukan null
        $this->assertNotNull(ROOT_URL, 'The ROOT_URL constant is missing or null.');
        
        // Periksa apakah konstanta ROOT_URL adalah sebuah string
        $this->assertIsString(ROOT_URL, 'The ROOT_URL constant should be a string.');
    }
    
    public function testDatabaseConstants() {
        // Periksa apakah konstanta DSN ada dan bukan null
        $this->assertNotNull(DSN, 'The DSN constant is missing or null.');
        
        // Periksa apakah konstanta DSN adalah sebuah string
        $this->assertIsString(DSN, 'The DSN constant should be a string.');
        
        // Periksa apakah konstanta DB_HOST ada dan bukan null
        $this->assertNotNull(DB_HOST, 'The DB_HOST constant is missing or null.');
        
        // Periksa apakah konstanta DB_HOST adalah sebuah string
        $this->assertIsString(DB_HOST, 'The DB_HOST constant should be a string.');
        
        // Periksa apakah konstanta DB_USER ada dan bukan null
        $this->assertNotNull(DB_USER, 'The DB_USER constant is missing or null.');
        
        // Periksa apakah konstanta DB_USER adalah sebuah string
        $this->assertIsString(DB_USER, 'The DB_USER constant should be a string.');
        
        // Periksa apakah konstanta DB_PASSWORD ada dan bukan null
        $this->assertNotNull(DB_PASSWORD, 'The DB_PASSWORD constant is missing or null.');
        
        // Periksa apakah konstanta DB_PASSWORD adalah sebuah string
        $this->assertIsString(DB_PASSWORD, 'The DB_PASSWORD constant should be a string.');
        
        // Periksa apakah konstanta DB_NAME ada dan bukan null
        $this->assertNotNull(DB_NAME, 'The DB_NAME constant is missing or null.');
        
        // Periksa apakah konstanta DB_NAME adalah sebuah string
        $this->assertIsString(DB_NAME, 'The DB_NAME constant should be a string.');
    }
    
    // Tambahkan metode pengujian lainnya sesuai kebutuhan
}
