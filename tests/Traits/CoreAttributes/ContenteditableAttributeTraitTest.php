<?php

namespace Phatlacan\Html\Traits\CoreAttributes;

use Phatlacan\Html\Contracts\CoreAttributesInterface;
use Phatlacan\Html\Traits\CoreAttributesTrait;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class ContenteditableAttributeTraitTest extends TestCase
{
    #[Test] public function render_false()
    {
        $this->assertNull($this->createMockInstance()->renderContenteditable());
    }

    #[Test] public function render_true()
    {
        $this->assertEquals(
            'contenteditable',
            $this->createMockInstance()->setContenteditable(true)->renderContenteditable()
        );
    }

    protected function createMockInstance(): object
    {
        return new class implements CoreAttributesInterface
        {
            use CoreAttributesTrait;
        };
    }
}
