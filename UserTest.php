<?php
require_once ('vendor/autoload.php');
use PHPUnit\Framework\TestCase;

require_once ('User.php');

class UserTest extends TestCase
{
    public function testUser()
    {
        $user = new User();
        $this->assertTrue($user instanceof User);
    }
}
