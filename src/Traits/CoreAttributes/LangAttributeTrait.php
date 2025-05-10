<?php

namespace Phatlacan\Html\Traits\CoreAttributes;

use Phatlacan\Html\Contracts\CoreAttributesInterface;

/**
 * @var string|null
 * @see https://www.w3.org/TR/2012/WD-html-markup-20121025/global-attributes.html#common.attrs.accesskey
 */
trait LangAttributeTrait
{
    protected ?string $lang = null;

    public function setLang(string $lang): CoreAttributesInterface
    {
        $this->lang = $lang;

        return $this;
    }

    public function renderLang(): ?string
    {
        if (!$this->lang) {
            return null;
        }

        return "lang=\"$this->lang\"";
    }
}
