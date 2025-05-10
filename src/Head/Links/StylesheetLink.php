<?php

namespace Phatlacan\Html\Head\Links;

use Phatlacan\Html\Enums\LinkEnum;
use Phatlacan\Html\Enums\LinkMediaEnum;

class StylesheetLink extends Link
{
    public function __construct(
        protected string $href,
        protected ?LinkMediaEnum $media = null,
    ) {
        parent::__construct($href, LinkEnum::STYLESHEET, $media);
    }

    public function render(): string
    {
        $output = "<{$this->getTagName()} rel=\"{$this->rel->value}\" href=\"$this->href\"";

        if ($this->media) {
            $output .= " media=\"{$this->media->value}\"";
        }

        return $output . '>';
    }
}
