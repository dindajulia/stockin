<?php

use PHPUnit\Framework\TestCase;

class ResetPasswordTest extends TestCase {

    public function testResetPasswordFormExists() {
        // Load the resetPassword.php page
        ob_start();
        include 'resetPassword.php';
        $output = ob_get_clean();

        // Check if the reset password form exists on the page
        $this->assertStringContainsString('<form action=""', $output, 'The reset password form is missing or incorrectly formatted.');
        $this->assertStringContainsString('id="resetPasswordUsername"', $output, 'The reset password username input is missing.');
        $this->assertStringContainsString('id="resetPasswordPassword1"', $output, 'The reset password password input is missing.');
        $this->assertStringContainsString('id="resetPasswordPassword2"', $output, 'The reset password confirm password input is missing.');
        $this->assertStringContainsString('type="button" id="resetPasswordButton"', $output, 'The reset password button is missing.');
    }

    public function testResetPasswordLinkExists() {
        // Load the resetPassword.php page
        ob_start();
        include 'resetPassword.php';
        $output = ob_get_clean();

        // Check if the Register link exists
        $this->assertStringContainsString('href="login.php?action=register"', $output, 'The register link is missing or incorrectly formatted.');
    }

    // Add more test methods for other scenarios as needed
}
