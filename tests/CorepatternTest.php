<?php
/**
 * Tests for CorePattern
 */

use PHPUnit\Framework\TestCase;
use Corepattern\Corepattern;

class CorepatternTest extends TestCase {
    private Corepattern $instance;

    protected function setUp(): void {
        $this->instance = new Corepattern(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Corepattern::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
