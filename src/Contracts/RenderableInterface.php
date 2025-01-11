<?php

namespace Phatlacan\Html\Contracts;

interface RenderableInterface
{
    public function render(): string;
    public function getTagName(): string;
}