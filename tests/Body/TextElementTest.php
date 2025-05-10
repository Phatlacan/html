<?php

namespace Phatlacan\Html\Body;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use stdClass;

class TextElementTest extends TestCase
{

    #[Test] public function render_empty()
    {
        $this->assertEquals('', new TextElement()->render());
    }

    #[Test] public function render_texts()
    {
        $this->assertEquals('Hello World', new TextElement(['Hello', ' ', 'World'])->render());
    }

    #[Test] public function render_non_renderables()
    {
        $this->assertEquals('', new TextElement([null, false, new stdClass()])->render());
    }

    #[Test] public function render_renderables()
    {
        $this->assertEquals(
            'Hello World',
            new TextElement(['Hello', ' ', new TextElement(['World'])])->render());
    }
}
