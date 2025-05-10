<?php

namespace Phatlacan\Html\Body;

use Phatlacan\Html\Body\Headings\H1;
use Phatlacan\Html\Body\Headings\H2;
use Phatlacan\Html\Body\Headings\H3;
use Phatlacan\Html\Body\Headings\H4;
use Phatlacan\Html\Body\Headings\H5;
use Phatlacan\Html\Body\Headings\H6;
use Phatlacan\Html\Body\Headings\HeadingTag;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class HeadingsTest extends TestCase
{

    #[DataProvider('getTags')]
    #[Test] public function render_basic(string $class, string $tag)
    {
        // Arrange
        $text = 'Hello World';
        $h1 = new $class(new TextElement([$text]));

        // Act && Assert
        $this->assertEquals("<$tag>$text</$tag>", $h1->render());
    }

    #[DataProvider('getTags')]
    #[Test] public function render_with_core_attributes(string $class, string $tag)
    {
        // Arrange
        $text = 'Hello World';
        $id = 'title';
        $classes = ['title', 'shadow'];
        /** @var HeadingTag $heading */
        $heading = new $class(new TextElement([$text]));
        $heading->setClass($classes)->setId($id);

        // Act && Assert
        $this->assertEquals(
            "<$tag id=\"$id\" class=\"$classes[0] $classes[1]\">$text</$tag>",
            $heading->render());
    }

    public static function getTags(): array
    {
        return [
            [H1::class, 'h1'],
            [H2::class, 'h2'],
            [H3::class, 'h3'],
            [H4::class, 'h4'],
            [H5::class, 'h5'],
            [H6::class, 'h6'],
        ];
    }
}