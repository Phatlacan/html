<?php

namespace Phatlacan\Html;

use Phatlacan\Html\Enums\LinkMediaEnum;
use Phatlacan\Html\Head\Links\IconLink;
use Phatlacan\Html\Head\Links\StylesheetLink;
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

    #[Test] public function render_icon()
    {
        // Arrange
        $href = 'iphone.svg';

        // Act && Assert
        $this->assertStringContainsString(
            "<link rel=\"icon\" href=\"$href\">",
            new Head(icon: new IconLink($href))->render());
    }

    #[Test] public function render_stylesheets()
    {
        // Arrange
        $mainCss = 'main.css';
        $printCss = 'print.css';
        $media = LinkMediaEnum::PRINT;

        // Act
        $rendered = new Head(stylesheets: [
            new StylesheetLink($mainCss),
            new StylesheetLink($printCss, $media),
        ])->render();

        // Assert
        $this->assertStringContainsString(
            "<link rel=\"stylesheet\" href=\"$mainCss\">",
            $rendered);
        $this->assertStringContainsString(
            "<link rel=\"stylesheet\" href=\"$printCss\" media=\"$media->value\">",
            $rendered);
    }
}
