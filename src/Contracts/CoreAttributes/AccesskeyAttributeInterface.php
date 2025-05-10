<?php

namespace Phatlacan\Html\Contracts\CoreAttributes;

use Phatlacan\Html\Contracts\CoreAttributesInterface;

interface AccesskeyAttributeInterface
{
    public function setAccessKey(string $accessKey): CoreAttributesInterface;
    public function renderAccessKey(): ?string;
}
