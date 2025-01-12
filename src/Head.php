<?php

namespace Phatlacan\Html;

use Phatlacan\Html\Contracts\RenderableInterface;
use Phatlacan\Html\Head\Links\IconLink;
use Phatlacan\Html\Head\Title;

/**
 * @see https://www.w3.org/TR/2011/WD-html5-author-20110809/the-head-element.html#the-head-element
 */
readonly class Head implements RenderableInterface
{
    public function __construct(
        private Title|string|null $title = null,
        private ?IconLink $icon = null
    ) {
    }

    public function render(): string
    {
        $output = "<{$this->getTagName()}>\n";

        if ($this->title instanceof Title) {
            $output .= "\t{$this->title->render()}\n";
        } elseif (is_string($this->title)) {
            $output .= "\t<title>$this->title</title>\n";
        }

        if ($this->icon) {
            $output .= "\t{$this->icon->render()}\n";
        }

        $output .= "</{$this->getTagName()}>\n";

        return $output;
    }

    public static function getTagName(): string
    {
        return 'head';
    }
}
