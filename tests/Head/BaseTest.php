<?php

namespace Phatlacan\Html\Head;

use Phatlacan\Html\Enums\TargetEnum;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class BaseTest extends TestCase
{

    #[Test] public function render()
    {
        // Arrange
        $url = 'https://yumerov.com';

        // Act && Assert
        $this->assertEquals("<base href=\"$url\">", new Base($url)->render());
    }

    #[Test] public function render_with_target()
    {
        // Arrange
        $url = 'https://yumerov.com';
        $target = TargetEnum::BLANK;

        // Act && Assert
        $this->assertEquals(
            "<base href=\"$url\" target=\"$target->value\">",
            new Base($url, $target)->render());
    }
}
