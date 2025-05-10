<?php

namespace Phatlacan\Html\Head\Links;

use Phatlacan\Html\Contracts\RenderableInterface;
use Phatlacan\Html\Contracts\TagInterface;
use Phatlacan\Html\Enums\LinkEnum;
use Phatlacan\Html\Enums\LinkMediaEnum;

/**
 * @see https://www.w3.org/TR/2011/WD-html5-author-20110809/the-link-element.html#the-link-element
 */
abstract class Link implements RenderableInterface, TagInterface
{
    //hreflang
    //type
    //title

    public function __construct(
        protected string $href,
        protected readonly LinkEnum $rel,
        protected ?LinkMediaEnum $media,
    ) {
    }

    public function render(): string
    {
        return "<{$this->getTagName()} rel=\"{$this->rel->value}\" href=\"$this->href\">";
    }

    public static function getTagName(): string
    {
        return 'link';
    }
}
