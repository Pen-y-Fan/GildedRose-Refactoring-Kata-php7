<?php

declare(strict_types=1);

namespace App;

class NormalItem implements ItemInterface
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
        --$this->item->sell_in;
    }
    public function adjustQuality(): void
    {
        if ($this->item->sell_in < 0) {
            $this->reduceQuality();
        }
        $this->reduceQuality();
    }

    protected function reduceQuality(): void
    {
        --$this->item->quality;
        if ($this->item->quality < 0) {
            $this->item->quality = 0;
        }
    }
}
