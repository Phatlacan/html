<?php

namespace Phatlacan\Html;

use Phatlacan\Html\Contracts\RenderableInterface;

readonly class Head implements RenderableInterface
{
    public function __construct(
        private Title $title
    ) {
    }

    public function render(): string
    {
        return "<{$this->getTagName()}>\n" .
            "\t{$this->title->render()}\n" .
            "</{$this->getTagName()}>\n";
    }

    public static function getTagName(): string
    {
        return 'head';
    }
}
