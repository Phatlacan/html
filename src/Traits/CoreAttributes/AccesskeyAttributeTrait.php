<?php

namespace Phatlacan\Html\Traits\CoreAttributes;

trait AccesskeyAttributeTrait
{
    /**
     * @var string|null
     * @see https://www.w3.org/TR/2012/WD-html-markup-20121025/global-attributes.html#common.attrs.accesskey
     */
    protected ?string $accessKey = null;

    public function setAccessKey(string $accessKey): static
    {
        $this->accessKey = $accessKey;

        return $this;
    }

    public function renderAccessKey(): ?string
    {
        if (!$this->accessKey) {
            return null;
        }

        return "accesskey=\"$this->accessKey\"";
    }
}