<?php

namespace Phatlacan\Html\Contracts\CoreAttributes;

interface ClassAttributeInterface
{
    /**
     * @param string[] $classes
     * @return ClassAttributeInterface
     */
    public function setClass(array $classes): ClassAttributeInterface;
    public function renderClass(): ?string;
}
