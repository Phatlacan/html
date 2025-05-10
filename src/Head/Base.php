<?php

namespace Phatlacan\Html\Head;

use Phatlacan\Html\Contracts\RenderableInterface;
use Phatlacan\Html\Contracts\TagInterface;
use Phatlacan\Html\Enums\TargetEnum;
use Phatlacan\Html\RenderableElement;
use Phatlacan\Html\Traits\GlobalAttributesTrait;

/**
 * @see https://www.w3.org/TR/2011/WD-html5-author-20110809/the-base-element.html#the-base-element
 */
readonly class Base implements RenderableInterface, TagInterface
{
    public function __construct(private string $href, private ?TargetEnum $target = null)
    {
    }

    public function render(): string
    {
        return "<{$this->getTagName()}{$this->renderAttributes()}>";
    }

    public static function getTagName(): string
    {
        return 'base';
    }

    protected function renderAttributes(): string
    {
        $output = " href=\"$this->href\"";
        if ($this->target) {
            $output .= " target=\"{$this->target->value}\"";
        }

        return $output;
    }
}
