<?php

namespace Phatlacan\Html;

use Phatlacan\Html\Contracts\RenderableInterface;

/**
 * @see https://www.w3.org/TR/2012/WD-html-markup-20121025/h1.html
 * @see https://www.w3.org/TR/2012/WD-html-markup-20121025/global-attributes.html Attributes
 */
readonly class H1 implements RenderableInterface
{
    public function render(): string
    {
        return "<{$this->getTagName()}></{$this->getTagName()}>";
    }

    public function getTagName(): string
    {
        return 'h1';
    }
}