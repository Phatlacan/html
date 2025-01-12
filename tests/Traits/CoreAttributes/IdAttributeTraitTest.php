<?php

namespace Phatlacan\Html\Traits\CoreAttributes;

use Phatlacan\Html\Contracts\CoreAttributesInterface;
use Phatlacan\Html\Traits\CoreAttributesTrait;
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
        return new class implements CoreAttributesInterface
        {
            use CoreAttributesTrait;
        };
    }
}