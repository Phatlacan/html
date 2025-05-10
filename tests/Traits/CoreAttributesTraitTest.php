<?php

namespace Phatlacan\Html\Traits;

use Phatlacan\Html\Contracts\CoreAttributesInterface;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class CoreAttributesTraitTest extends TestCase
{

    #[Test] public function render_null()
    {
        $this->assertEquals('', $this->createMockInstance()->renderCoreAttributes());
    }

    #[Test] public function render()
    {
        // Arrange
        $id = 'logo';
        $classes = ['big-logo', 'animation'];

        // Act
        $rendered = $this->createMockInstance()
            ->setId('logo')
            ->setClass($classes)
            ->renderCoreAttributes();

        // Assert
        $this->assertStringContainsString("id=\"$id\"", $rendered);
        $this->assertStringContainsString("class=\"$classes[0] $classes[1]\"", $rendered);
    }

    protected function createMockInstance(): object
    {
        return new class implements CoreAttributesInterface
        {
            use CoreAttributesTrait;
        };
    }
}
