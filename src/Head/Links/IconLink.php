<?php

namespace Phatlacan\Html\Head\Links;

use Phatlacan\Html\Enums\IconTypeEnum;
use Phatlacan\Html\Enums\LinkEnum;

class IconLink extends Link
{
    public function __construct(
        protected string $href,
        protected ?array $sizes = [],
        protected ?IconTypeEnum $type = null,
    ) {
        parent::__construct($href, LinkEnum::ICON, null);
    }

    public function render(): string
    {
        $output = "<{$this->getTagName()} rel=\"{$this->rel->value}\" href=\"$this->href\"";

        if (!empty($this->sizes)) {
            $output .= " sizes=\"" . implode(' ', $this->sizes) . "\"";
        }

        if (!empty($this->type)) {
            $output .= " type=\"{$this->type->value}\"";
        }

        return $output . ">";
    }
}
