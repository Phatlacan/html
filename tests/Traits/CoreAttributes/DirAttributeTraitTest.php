<?php

namespace Phatlacan\Html\Traits\CoreAttributes;

use Phatlacan\Html\Enums\TextDirectionEnum;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class DirAttributeTraitTest extends TestCase
{

    #[Test] public function render_default()
    {
        $this->assertNull($this->createMockInstance()->renderDir());
    }

    #[Test] public function render_not_null()
    {
        // Arrange
        $dir = TextDirectionEnum::RIGHT_TO_LEFT;

        // Act && Assert
        $this->assertEquals(
            "dir=\"$dir->value\"",
            $this->createMockInstance()->setDir($dir)->renderDir()
        );
    }

    protected function createMockInstance(): object
    {
        return new class
        {
            use DirAttributeTrait;
        };
    }
}