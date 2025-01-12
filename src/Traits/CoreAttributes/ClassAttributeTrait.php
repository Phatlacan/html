<?php

namespace Phatlacan\Html\Traits\CoreAttributes;

use Phatlacan\Html\Contracts\CoreAttributesInterface;

/**
 * @see https://www.w3.org/TR/2012/WD-html-markup-20121025/global-attributes.html#common.attrs.class
 */
trait ClassAttributeTrait
{
    protected array $class = [];

    public function setClass(array $classes): CoreAttributesInterface
    {
        $this->class = array_filter($classes, fn ($class) => is_string($class));

        return $this;
    }

    public function renderClass(): ?string
    {
        if (empty($this->class)) {
            return null;
        }

        return 'class="' . implode(' ', $this->class) . '"';
    }
}
