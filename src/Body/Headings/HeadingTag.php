<?php

namespace Phatlacan\Html\Body\Headings;

use Phatlacan\Html\Body\TextElement;
use Phatlacan\Html\Contracts\CoreAttributesInterface;
use Phatlacan\Html\Contracts\RenderableInterface;
use Phatlacan\Html\Contracts\TagInterface;
use Phatlacan\Html\Traits\GlobalAttributesTrait;

/**
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/Heading_Elements
 */
abstract class HeadingTag implements RenderableInterface, TagInterface, CoreAttributesInterface
{
    use GlobalAttributesTrait;

    public function __construct(private readonly TextElement $content)
    {
    }

    public function render(): string
    {
        return "<{$this->getTagName()}{$this->renderCoreAttributes()}>"
            . $this->content->render()
            . "</{$this->getTagName()}>";
    }
}
