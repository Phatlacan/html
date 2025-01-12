<?php

namespace Phatlacan\Html\Head\Links;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class StylesheetLinkTest extends TestCase
{

    #[Test] public function render()
    {
        $this->assertSame(
            '<link rel="stylesheet" href="styles.css">',
            new StylesheetLink('styles.css')->render()
        );
    }
}
