<?php

namespace Phatlacan\Html\Enums;

enum TargetEnum: string
{
    case BLANK = '_blank';
    case SELF = '_self';
    case PARENT = '_parent';
    case TOP = '_top';
}
