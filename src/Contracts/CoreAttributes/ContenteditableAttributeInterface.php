<?php

namespace Phatlacan\Html\Contracts\CoreAttributes;

use Phatlacan\Html\Contracts\CoreAttributesInterface;

interface ContenteditableAttributeInterface
{
    public function setContenteditable(bool $contenteditable): CoreAttributesInterface;
    public function renderContenteditable(): ?string;
}
