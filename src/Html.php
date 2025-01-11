<?php

namespace Phatlacan\Html;

use Body;
use Head;
use Phatlacan\Html\Contracts\RenderableInterface;
use RenderableElement;

class Html extends RenderableElement
{
    public function __construct(
        private readonly Head $head,
        private readonly Body $body,
        private readonly string $lang = 'en'
    ) {
    }

    public function render(): string
    {
        return "<!DOCTYPE html>\n" .
            "<{$this->getTagName()} lang=\"$this->lang\">\n" .
            $this->head->render() . "\n".
            $this->body->render() . "\n".
            $this->renderClosingTag();
    }

    public function getTagName(): string
    {
        return 'html';
    }
}