<?php

namespace Phatlacan\Html\Body\Headings;

use Phatlacan\Html\Body\TextElement;
use Phatlacan\Html\Contracts\CoreAttributesInterface;
use Phatlacan\Html\Contracts\RenderableInterface;
use Phatlacan\Html\Traits\GlobalAttributesTrait;

/**
 * @see https://www.w3.org/TR/2012/WD-html-markup-20121025/h3.html h3
 */
class H3 extends HeadingTag
{
    public static function getTagName(): string
    {
        return 'h3';
    }
}
