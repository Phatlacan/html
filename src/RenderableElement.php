<?php

namespace Phatlacan\Html;

use Phatlacan\Html\Contracts\RenderableInterface;
use Phatlacan\Html\Contracts\TagInterface;

abstract class RenderableElement implements RenderableInterface, TagInterface
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
