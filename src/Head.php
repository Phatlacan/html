<?php

namespace Phatlacan\Html;

use Phatlacan\Html\Contracts\RenderableInterface;
use Title;

readonly class Head implements RenderableInterface
{
    public function __construct(
        private Title $title
    ) {
    }

    public function render(): string
    {
        return "<{$this->getTagName()}>\n" .
            "\t{$this->title->render()}" .
            "</{$this->getTagName()}>\n";
    }

    public function getTagName(): string
    {
        return 'head';
    }
}