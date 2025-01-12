<?php

namespace Phatlacan\Html\Traits\CoreAttributes;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class IdAttributeTraitTest extends TestCase
{

    #[Test] public function render_null()
    {
        $this->assertNull($this->createMockInstance()->renderId());
    }

    #[Test] public function render_not_null()
    {
        // Arrange
        $id = 'logo';

        // Act
        $rendered = $this->createMockInstance()->setId($id)->renderId();

        // Assert
        $this->assertEquals("id=\"$id\"", $rendered);
    }

    protected function createMockInstance(): object
    {
        return new class
        {
            use IdAttributeTrait;
        };
    }
}