<?php

namespace Phatlacan\Html\Contracts;

use Phatlacan\Html\Contracts\CoreAttributes\AccesskeyAttributeInterface;
use Phatlacan\Html\Contracts\CoreAttributes\ClassAttributeInterface;
use Phatlacan\Html\Contracts\CoreAttributes\ContenteditableAttributeInterface;
use Phatlacan\Html\Contracts\CoreAttributes\IdAttributeInterface;
use Phatlacan\Html\Contracts\CoreAttributes\LangAttributeInterface;

interface CoreAttributesInterface extends
    IdAttributeInterface,
    ClassAttributeInterface,
    AccesskeyAttributeInterface,
    ContenteditableAttributeInterface,
    LangAttributeInterface
{
}
