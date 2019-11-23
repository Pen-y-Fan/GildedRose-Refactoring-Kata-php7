<?php

declare(strict_types=1);

namespace App;

class SulfurasHandOfRagnaros implements ItemInterface
{
    public $item;

    public function __construct(Item $item)
    {
        $this->item = $item;
    }

    public function __toString(): string
    {
        return "{$this->item->name}, {$this->item->sell_in}, {$this->item->quality}";
    }

    public function adjustSellIn(): void
    {
        // does not reduce
    }
    public function adjustQuality(): void
    {
        $this->item->quality = 80;
    }
}
