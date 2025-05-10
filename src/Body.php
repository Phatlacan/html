<?php

namespace Phatlacan\Html;

use Phatlacan\Html\Contracts\RenderableInterface;

readonly class Body implements RenderableInterface
{
    /**
     * @param RenderableInterface[] $elements
     */
    public function __construct(array $elements = [])
    {
    }

    public function render(): string
    {
        return '';
    }

    public function getTagName(): string
    {
        return 'body';
    }
}
