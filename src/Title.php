<?php

namespace Phatlacan\Html;

use Phatlacan\Html\Contracts\RenderableInterface;

/**
 * @see https://www.w3.org/Provider/Style/TITLE.html
 */
readonly class Title implements RenderableInterface
{
    public function __construct(private string $title)
    {
    }

    public function render(): string
    {
        return "<{$this->getTagName()}>$this->title</{$this->getTagName()}>";
    }

    public static function getTagName(): string
    {
        return 'title';
    }
}
