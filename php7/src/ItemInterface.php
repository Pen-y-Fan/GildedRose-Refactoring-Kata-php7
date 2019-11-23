<?php

declare(strict_types=1);

namespace App;

interface ItemInterface
{
    public function __construct(Item $item);
    public function __toString(): string;
    public function adjustSellIn(): void;
    public function adjustQuality(): void;
}
