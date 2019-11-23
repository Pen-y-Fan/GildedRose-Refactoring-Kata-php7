<?php

declare(strict_types=1);

namespace App;

class GildedRoseFactory
{
    private $items = [];

    public function __construct(array $items)
    {
        foreach ($items as $item) {
            switch ($item->name) {
                case 'Sulfuras, Hand of Ragnaros':
                    $this->items[] = new SulfurasHandOfRagnaros($item);
                    break;

                case 'Aged Brie':
                    $this->items[] = new AgedBrie($item);
                    break;
                
                case 'Backstage passes to a TAFKAL80ETC concert':
                    $this->items[] = new BackstagePassesToAConcert($item);
                    break;
                
                case 'Conjured Mana Cake':
                    $this->items[] = new ConjuredManaCake($item);
                    break;

                default:
                    $this->items[] = new NormalItem($item);
                    break;
            }
        }
    }

    public function updateQuality(): void
    {
        foreach ($this->items as $item) {
            $item->adjustSellIn();
            $item->adjustQuality();
        }
    }
}
