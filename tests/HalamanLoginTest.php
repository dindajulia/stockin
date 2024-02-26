<?php

class HalamanLoginTest extends \PHPUnit\Framework\TestCase {
    
    public function testLoginFormExists() {
        // Load the login.php page
        ob_start();
        include 'login.php';
        $output = ob_get_clean();
    
        // Check if the login form exists on the page
        $this->assertStringContainsString('<form action=""', $output);
        $this->assertStringContainsString('id="loginUsername"', $output);
        $this->assertStringContainsString('id="loginPassword"', $output);
        $this->assertStringContainsString('id="login"', $output);
        
        // Check that the variables exist
        $this->assertStringContainsString('id="loginUsername"', $output);
        $this->assertStringContainsString('id="loginPassword"', $output);
        $this->assertStringContainsString('id="login"', $output);
    }

    public function testRegisterLinkExists() {
        // Load the login.php page
        ob_start();
        include 'login.php';
        $output = ob_get_clean();

        // Check if the Register link exists
        $this->assertStringContainsString('href="login.php?action=register"', $output);
    }

    public function testResetPasswordLinkExists() {
        // Load the login.php page
        ob_start();
        include 'login.php';
        $output = ob_get_clean();

        // Check if the Reset Password link exists
        $this->assertStringContainsString('href="login.php?action=resetPassword"', $output);
    }

}