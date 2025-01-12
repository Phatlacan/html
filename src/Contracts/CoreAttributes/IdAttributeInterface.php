<?php

namespace Phatlacan\Html\Contracts\CoreAttributes;

use Phatlacan\Html\Contracts\CoreAttributesInterface;

interface IdAttributeInterface
{
    public function setId(string $id): CoreAttributesInterface;
    public function renderId(): ?string;
}
