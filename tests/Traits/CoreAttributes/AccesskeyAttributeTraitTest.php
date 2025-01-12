<?php

namespace Phatlacan\Html\Traits\CoreAttributes;

use Phatlacan\Html\Contracts\CoreAttributesInterface;
use Phatlacan\Html\Traits\CoreAttributesTrait;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class AccesskeyAttributeTraitTest extends TestCase
{

    #[Test] public function render_null()
    {
        $this->assertNull($this->createMockInstance()->renderAccessKey());
    }

    #[Test] public function render_not_null()
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
        return new class implements CoreAttributesInterface
        {
            use CoreAttributesTrait;
        };
    }
}