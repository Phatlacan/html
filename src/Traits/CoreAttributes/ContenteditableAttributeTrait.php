<?php

namespace Phatlacan\Html\Traits\CoreAttributes;

use Phatlacan\Html\Contracts\CoreAttributesInterface;

/**
 * @see https://www.w3.org/TR/2012/WD-html-markup-20121025/global-attributes.html#common.attrs.contenteditable
 */
trait ContenteditableAttributeTrait
{
    protected bool $contenteditable = false;

    public function setContenteditable(bool $contenteditable): CoreAttributesInterface
    {
        $this->contenteditable = $contenteditable;

        return $this;
    }

    public function renderContenteditable(): ?string
    {
        return $this->contenteditable ? 'contenteditable' : null;
    }
}
