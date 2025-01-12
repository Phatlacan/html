<?php

namespace Phatlacan\Html\Head\Links;

use Phatlacan\Html\Enums\IconTypeEnum;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class IconLinkTest extends TestCase
{

    #[Test] public function render_png()
    {
        // Arrange
        $href = 'favicon.png';
        $type = IconTypeEnum::IMAGE_PNG;
        $sizes = ['16x16', '32x32'];

        // Act && Assert
        $this->assertEquals(
            "<link rel=\"icon\" href=\"$href\" sizes=\"" . implode(' ', $sizes)
                .  "\" type=\"$type->value\">",
            new IconLink($href, $sizes, $type)->render()
        );
    }

    #[Test] public function render_svg()
    {
        // Arrange
        $href = 'gnome.svg';
        $type = IconTypeEnum::IMAGE_SVG;
        $sizes = ['any'];

        // Act && Assert
        $this->assertEquals(
            "<link rel=\"icon\" href=\"$href\" sizes=\"" . implode(' ', $sizes)
                .  "\" type=\"$type->value\">",
            new IconLink($href, $sizes, $type)->render()
        );
    }
}
