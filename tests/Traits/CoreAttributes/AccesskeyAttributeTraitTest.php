<?php

namespace Phatlacan\Html\Traits\CoreAttributes;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class AccesskeyAttributeTraitTest extends TestCase
{

    #[Test] public function renderAccessKey_null()
    {
        $this->assertNull($this->createMockInstance()->renderAccessKey());
    }

    #[Test] public function renderAccessKey_not_null()
    {
        // Arrange
        $accessKey = 'a';

        // Act
        $rendered = $this->createMockInstance()->setAccessKey($accessKey)->renderAccessKey();

        // Assert
        $this->assertEquals("accesskey=\"$accessKey\"", $rendered);
    }

    protected function createMockInstance(): object
    {
        return new class
        {
            use AccesskeyAttributeTrait;
        };
    }
}