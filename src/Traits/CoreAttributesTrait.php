<?php

namespace Phatlacan\Html\Traits;

use Phatlacan\Html\Traits\CoreAttributes\AccesskeyAttributeTrait;
use Phatlacan\Html\Traits\CoreAttributes\ClassAttributeTrait;
use Phatlacan\Html\Traits\CoreAttributes\ContenteditableAttributeTrait;
use Phatlacan\Html\Traits\CoreAttributes\DirAttributeTrait;
use Phatlacan\Html\Traits\CoreAttributes\IdAttributeTrait;
use Phatlacan\Html\Traits\CoreAttributes\LangAttributeTrait;

/**
 * @see https://www.w3.org/TR/2012/WD-html-markup-20121025/global-attributes.html#common.attrs.core
 */
trait CoreAttributesTrait
{
    use AccesskeyAttributeTrait;
    use ClassAttributeTrait;
    use ContenteditableAttributeTrait;
    use DirAttributeTrait;
    use IdAttributeTrait;
    use LangAttributeTrait;

    public function renderCoreAttributes(): string
    {
        $attributes = array_filter([
            $this->renderId(),
            $this->renderClass(),
            $this->renderAccessKey(),
            $this->renderContenteditable(),
            $this->renderDir(),
            $this->renderLang(),
        ]);

        if (empty($attributes)) {
            return '';
        }

        return ' ' . implode(' ', $attributes);
    }
}
