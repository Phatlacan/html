<?php

namespace Phatlacan\Html\Tests;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class TitleTest extends TestCase
{

    #[Test] public function render()
    {
        // Arrange
        $title = 'Hello World';

        // Act
        $titleInstance = new Title($title);

        // Assert
        $this->assertEquals("<title>$title</title>", $titleInstance->render());
    }

    #[Test] public function getTagName()
    {
        $this->assertEquals('title', Title::getTagName());
    }
}
