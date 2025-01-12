<?php

namespace Phatlacan\Html\Traits\CoreAttributes;

use Phatlacan\Html\Enums\TextDirectionEnum;

/**
 * @see https://www.w3.org/TR/2012/WD-html-markup-20121025/global-attributes.html#common.attrs.dir
 */
trait DirAttributeTrait
{
    protected TextDirectionEnum $dir = TextDirectionEnum::AUTO;

    public function setDir(TextDirectionEnum $dir): static
    {
        $this->dir = $dir;

        return $this;
    }

    public function renderDir(): string
    {
        return "dir=\"{$this->dir->value}\"";
    }
}