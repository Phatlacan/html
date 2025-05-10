<?php

namespace Phatlacan\Html\Body\Headings;

use Phatlacan\Html\Body\TextElement;
use Phatlacan\Html\Contracts\CoreAttributesInterface;
use Phatlacan\Html\Contracts\RenderableInterface;
use Phatlacan\Html\Traits\GlobalAttributesTrait;

/**
 * @see https://www.w3.org/TR/2012/WD-html-markup-20121025/h5.html h5
 */
class H5 extends HeadingTag
{
    public static function getTagName(): string
    {
        return 'h5';
    }
}
