<?php

namespace Phatlacan\Html\Body;

use Phatlacan\Html\Contracts\InlineElementInterface;
use Phatlacan\Html\Contracts\RenderableInterface;

readonly class TextElement implements InlineElementInterface, RenderableInterface
{
    public function __construct(private array $contents = [])
    {
    }

    public function render(): string
    {
        return array_reduce(
            $this->contents,
            function (string $carry, mixed $content) {
                if (is_string($content) || is_numeric($content)) {
                    return $carry . $content;
                }

                if ($content instanceof RenderableInterface) {
                    return $carry . $content->render();
                }

                return '';
            },
            ''
        );
    }
}
