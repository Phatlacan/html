<?php

namespace Phatlacan\Html\Contracts\CoreAttributes;

use Phatlacan\Html\Contracts\CoreAttributesInterface;

interface LangAttributeInterface
{
    public function setLang(string $lang): CoreAttributesInterface;
    public function renderLang(): ?string;
}
