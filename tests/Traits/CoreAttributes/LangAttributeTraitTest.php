<?php

namespace Phatlacan\Html\Traits\CoreAttributes;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class LangAttributeTraitTest extends TestCase
{

    #[Test] public function render_null()
    {
        $this->assertNull($this->createMockInstance()->renderLang());
    }

    #[Test] public function render_not_null()
    {
        // Arrange
        $lang = 'en';

        // Act
        $rendered = $this->createMockInstance()->setLang($lang)->renderLang();

        // Assert
        $this->assertEquals("lang=\"$lang\"", $rendered);
    }

    protected function createMockInstance(): object
    {
        return new class
        {
            use LangAttributeTrait;
        };
    }
}