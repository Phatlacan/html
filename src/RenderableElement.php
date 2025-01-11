<?php

namespace Phatlacan\Html;

use Phatlacan\Html\Contracts\RenderableInterface;

abstract class RenderableElement implements RenderableInterface
{
    public function renderOpeningTag(): string
    {
        return "<{$this->getTagName()}>\n";
    }

    public function renderClosingTag(): string
    {
        return "</{$this->getTagName()}>\n";
    }
}
