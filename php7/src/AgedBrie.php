<?php

declare(strict_types=1);

namespace App;

class AgedBrie implements ItemInterface
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
            $this->increaseQuality();
        }
        $this->increaseQuality();
    }

    protected function increaseQuality(): void
    {
        if ($this->item->quality < 50) {
            ++$this->item->quality;
        }
    }
}
