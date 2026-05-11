<?php
/**
 * Tests for ZetaLedger
 */

use PHPUnit\Framework\TestCase;
use Zetaledger\Zetaledger;

class ZetaledgerTest extends TestCase {
    private Zetaledger $instance;

    protected function setUp(): void {
        $this->instance = new Zetaledger(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Zetaledger::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
