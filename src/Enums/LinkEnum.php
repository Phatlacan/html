<?php

namespace Phatlacan\Html\Enums;

/**
 * @see https://www.w3.org/TR/html401/types.html#type-links
 */
enum LinkEnum: string
{
    case STYLESHEET = 'stylesheet';
    case ICON = 'icon';
    case APPLE_TOUCH_ICON = 'apple-touch-icon';
    case CANONICAL = 'canonical';
    case ALTERNATE = 'alternate';
    case NEXT = 'next';
    case PREV = 'prev';
    case MANIFEST = 'manifest';
}
