<?php

namespace Phatlacan\Html\Traits\CoreAttributes;

use Phatlacan\Html\Contracts\CoreAttributesInterface;

/**
 * @var string|null
 * @see https://www.w3.org/TR/2012/WD-html-markup-20121025/global-attributes.html#common.attrs.accesskey
 */
trait IdAttributeTrait
{
    protected ?string $id = null;

    public function setId(string $id): CoreAttributesInterface
    {
        $this->id = $id;

        return $this;
    }

    public function renderId(): ?string
    {
        if (!$this->id) {
            return null;
        }

        return "id=\"$this->id\"";
    }
}
