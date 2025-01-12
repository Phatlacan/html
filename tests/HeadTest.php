<?php

namespace Phatlacan\Html;

use Phatlacan\Html\Head\Title;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class HeadTest extends TestCase
{

    #[Test] public function render_object_title()
    {
        $this->assertStringContainsString(
            '<title>Hello World</title>',
            new Head(title: new Title('Hello World'))->render());
    }

    #[Test] public function render_string_title()
    {
        $this->assertStringContainsString(
            '<title>Hello World</title>',
            new Head(title: 'Hello World')->render());
    }
}
