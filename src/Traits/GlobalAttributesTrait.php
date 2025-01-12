<?php

namespace Phatlacan\Html\Traits;

/**
 * @see https://www.w3.org/TR/2012/WD-html-markup-20121025/global-attributes.html
 */
trait GlobalAttributesTrait
{
    use CoreAttributesTrait;

    public function renderGlobalAttributes(): string
    {
        $attributes = array_filter([
            $this->renderCoreAttributes(),
        ]);

        return trim(implode(' ', $attributes));
    }
}
