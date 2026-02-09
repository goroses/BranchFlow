<?php
/**
 * Tests for BranchFlow
 */

use PHPUnit\Framework\TestCase;
use Branchflow\Branchflow;

class BranchflowTest extends TestCase {
    private Branchflow $instance;

    protected function setUp(): void {
        $this->instance = new Branchflow(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Branchflow::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
