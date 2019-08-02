<?php

namespace App;

final class GildedRose
{

    private $items = [];
    private $item = '';

    public function __construct($items)
    {
        $this->items = $items;
    }

    public function updateQuality()
    {
        foreach ($this->items as $this->item) {
            $this->reduceSellIn();

            switch ($this->item->name) {
                case 'Sulfuras, Hand of Ragnaros':
                    $this->item->quality = 80;
                    break;

                case 'Aged Brie':
                    $this->increaseQualityOfAgedBrie();
                    break;

                case 'Backstage passes to a TAFKAL80ETC concert':
                    $this->adjustQualityOfBackstagePass();
                    break;

                case 'Conjured Mana Cake':
                    $this->reduceQualityOfConjured();
                    break;

                default:
                    $this->reduceQualityOfNormalItem();
                    break;
            }
        }
    }
    
    protected function increaseQuality()
    {
        if ($this->item->quality < 50) {
            $this->item->quality ++;
        }
    }

    protected function increaseQualityOfAgedBrie()
    {
        if ($this->item->sell_in < 0) {
            $this->increaseQuality();
        }
        $this->increaseQuality();
    }

    protected function adjustQualityOfBackstagePass()
    {
        if ($this->item->sell_in < 0) {
            return $this->item->quality = 0;
        }
        if ($this->item->sell_in < 5) {
            $this->increaseQuality();
        }
        if ($this->item->sell_in < 10) {
            $this->increaseQuality();
        }
        $this->increaseQuality();
    }

    protected function reduceQualityOfConjured()
    {
        if ($this->item->sell_in < 0) {
            $this->reduceQuality();
            $this->reduceQuality();
        }
        $this->reduceQuality();
        $this->reduceQuality();
    }

    protected function reduceQualityOfNormalItem()
    {
        if ($this->item->sell_in < 0) {
            $this->reduceQuality();
        }
        $this->reduceQuality();
    }

    protected function reduceQuality()
    {
        if ($this->item->quality == 0) {
            return;
        }
        $this->item->quality --;
    }

    protected function reduceSellIn()
    {
        if ($this->item->name == 'Sulfuras, Hand of Ragnaros') {
            return;
        }
        $this->item->sell_in --;
    }
}
