<?php

namespace Phatlacan\Html\Traits\CoreAttributes;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use stdClass;

class ClassAttributeTraitTest extends TestCase
{

    #[Test] public function render_null()
    {
        $this->assertNull($this->createMockInstance()->renderClass());
    }

    #[Test] public function render_non_string()
    {
        $this->assertNull($this->createMockInstance()->setClass([
            1,
            new stdClass(),
            []
        ])->renderClass());
    }

    #[Test] public function render_strings()
    {
        // Arrange
        $classes = ['wrapper', 'border'];

        // Act
        $rendered = $this->createMockInstance()->setClass($classes)->renderClass();

        // Assert
        $this->assertEquals("class=\"$classes[0] $classes[1]\"", $rendered);
    }

    protected function createMockInstance(): object
    {
        return new class
        {
            use ClassAttributeTrait;
        };
    }
}