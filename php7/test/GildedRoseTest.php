<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use App\Item;
use App\GildedRoseFactory;

class GildedRoseTest extends TestCase
{
    /**
     * @test
     * @dataProvider dataProvider
     */
    public function GildedRoseFactory(
        $inputName,
        $inputSellIn,
        $inputQuality,
        $expectedName,
        $expectedSellIn,
        $expectedQuality
    ): void {
        $items      = [new Item($inputName, $inputSellIn, $inputQuality)];
        $gildedRose = new GildedRoseFactory($items);
        $gildedRose->updateQuality();
        $this->assertEquals(
            [$expectedName, $expectedSellIn, $expectedQuality],
            [$items[0]->name, $items[0]->sell_in, $items[0]->quality]
        );
    }

    public function dataProvider()
    {
        return [
            ['+5 Dexterity Vest', 10, 20, '+5 Dexterity Vest', 9, 19],
            ['Aged Brie', 2, 0, 'Aged Brie', 1, 1],
            ['Elixir of the Mongoose', 5, 7, 'Elixir of the Mongoose', 4, 6],
            ['Sulfuras, Hand of Ragnaros', 0, 80, 'Sulfuras, Hand of Ragnaros', 0, 80],
            ['Sulfuras, Hand of Ragnaros', -1, 80, 'Sulfuras, Hand of Ragnaros', -1, 80],
            ['Backstage passes to a TAFKAL80ETC concert', 15, 20, 'Backstage passes to a TAFKAL80ETC concert', 14, 21],
            ['Backstage passes to a TAFKAL80ETC concert', 10, 49, 'Backstage passes to a TAFKAL80ETC concert', 9, 50],
            ['Backstage passes to a TAFKAL80ETC concert', 5, 49, 'Backstage passes to a TAFKAL80ETC concert', 4, 50],
            ['Conjured Mana Cake', 3, 6, 'Conjured Mana Cake', 2, 4],
            ['+5 Dexterity Vest', 9, 19, '+5 Dexterity Vest', 8, 18],
            ['Aged Brie', 1, 1, 'Aged Brie', 0, 2],
            ['Elixir of the Mongoose', 4, 6, 'Elixir of the Mongoose', 3, 5],
            ['Sulfuras, Hand of Ragnaros', 0, 80, 'Sulfuras, Hand of Ragnaros', 0, 80],
            ['Sulfuras, Hand of Ragnaros', -1, 80, 'Sulfuras, Hand of Ragnaros', -1, 80],
            ['Backstage passes to a TAFKAL80ETC concert', 14, 21, 'Backstage passes to a TAFKAL80ETC concert', 13, 22],
            ['Backstage passes to a TAFKAL80ETC concert', 9, 50, 'Backstage passes to a TAFKAL80ETC concert', 8, 50],
            ['Backstage passes to a TAFKAL80ETC concert', 4, 50, 'Backstage passes to a TAFKAL80ETC concert', 3, 50],
            ['Conjured Mana Cake', 2, 4, 'Conjured Mana Cake', 1, 2],
            ['+5 Dexterity Vest', 8, 18, '+5 Dexterity Vest', 7, 17],
            ['Aged Brie', 0, 2, 'Aged Brie', -1, 4],
            ['Elixir of the Mongoose', 3, 5, 'Elixir of the Mongoose', 2, 4],
            ['Sulfuras, Hand of Ragnaros', 0, 80, 'Sulfuras, Hand of Ragnaros', 0, 80],
            ['Sulfuras, Hand of Ragnaros', -1, 80, 'Sulfuras, Hand of Ragnaros', -1, 80],
            ['Backstage passes to a TAFKAL80ETC concert', 13, 22, 'Backstage passes to a TAFKAL80ETC concert', 12, 23],
            ['Backstage passes to a TAFKAL80ETC concert', 8, 50, 'Backstage passes to a TAFKAL80ETC concert', 7, 50],
            ['Backstage passes to a TAFKAL80ETC concert', 3, 50, 'Backstage passes to a TAFKAL80ETC concert', 2, 50],
            ['Conjured Mana Cake', 1, 2, 'Conjured Mana Cake', 0, 0],
            ['+5 Dexterity Vest', 7, 17, '+5 Dexterity Vest', 6, 16],
            ['Aged Brie', -1, 4, 'Aged Brie', -2, 6],
            ['Elixir of the Mongoose', 2, 4, 'Elixir of the Mongoose', 1, 3],
            ['Sulfuras, Hand of Ragnaros', 0, 80, 'Sulfuras, Hand of Ragnaros', 0, 80],
            ['Sulfuras, Hand of Ragnaros', -1, 80, 'Sulfuras, Hand of Ragnaros', -1, 80],
            ['Backstage passes to a TAFKAL80ETC concert', 12, 23, 'Backstage passes to a TAFKAL80ETC concert', 11, 24],
            ['Backstage passes to a TAFKAL80ETC concert', 7, 50, 'Backstage passes to a TAFKAL80ETC concert', 6, 50],
            ['Backstage passes to a TAFKAL80ETC concert', 2, 50, 'Backstage passes to a TAFKAL80ETC concert', 1, 50],
            ['Conjured Mana Cake', 0, 0, 'Conjured Mana Cake', -1, 0],
            ['+5 Dexterity Vest', 6, 16, '+5 Dexterity Vest', 5, 15],
            ['Aged Brie', -2, 6, 'Aged Brie', -3, 8],
            ['Elixir of the Mongoose', 1, 3, 'Elixir of the Mongoose', 0, 2],
            ['Sulfuras, Hand of Ragnaros', 0, 80, 'Sulfuras, Hand of Ragnaros', 0, 80],
            ['Sulfuras, Hand of Ragnaros', -1, 80, 'Sulfuras, Hand of Ragnaros', -1, 80],
            ['Backstage passes to a TAFKAL80ETC concert', 11, 24, 'Backstage passes to a TAFKAL80ETC concert', 10, 25],
            ['Backstage passes to a TAFKAL80ETC concert', 6, 50, 'Backstage passes to a TAFKAL80ETC concert', 5, 50],
            ['Backstage passes to a TAFKAL80ETC concert', 1, 50, 'Backstage passes to a TAFKAL80ETC concert', 0, 50],
            ['Conjured Mana Cake', -1, 0, 'Conjured Mana Cake', -2, 0],
            ['+5 Dexterity Vest', 5, 15, '+5 Dexterity Vest', 4, 14],
            ['Aged Brie', -3, 8, 'Aged Brie', -4, 10],
            ['Elixir of the Mongoose', 0, 2, 'Elixir of the Mongoose', -1, 0],
            ['Sulfuras, Hand of Ragnaros', 0, 80, 'Sulfuras, Hand of Ragnaros', 0, 80],
            ['Sulfuras, Hand of Ragnaros', -1, 80, 'Sulfuras, Hand of Ragnaros', -1, 80],
            ['Backstage passes to a TAFKAL80ETC concert', 10, 25, 'Backstage passes to a TAFKAL80ETC concert', 9, 27],
            ['Backstage passes to a TAFKAL80ETC concert', 5, 50, 'Backstage passes to a TAFKAL80ETC concert', 4, 50],
            ['Backstage passes to a TAFKAL80ETC concert', 0, 50, 'Backstage passes to a TAFKAL80ETC concert', -1, 0],
            ['Conjured Mana Cake', -2, 0, 'Conjured Mana Cake', -3, 0],
            ['+5 Dexterity Vest', 4, 14, '+5 Dexterity Vest', 3, 13],
            ['Aged Brie', -4, 10, 'Aged Brie', -5, 12],
            ['Elixir of the Mongoose', -1, 0, 'Elixir of the Mongoose', -2, 0],
            ['Sulfuras, Hand of Ragnaros', 0, 80, 'Sulfuras, Hand of Ragnaros', 0, 80],
            ['Sulfuras, Hand of Ragnaros', -1, 80, 'Sulfuras, Hand of Ragnaros', -1, 80],
            ['Backstage passes to a TAFKAL80ETC concert', 9, 27, 'Backstage passes to a TAFKAL80ETC concert', 8, 29],
            ['Backstage passes to a TAFKAL80ETC concert', 4, 50, 'Backstage passes to a TAFKAL80ETC concert', 3, 50],
            ['Backstage passes to a TAFKAL80ETC concert', -1, 0, 'Backstage passes to a TAFKAL80ETC concert', -2, 0],
            ['Conjured Mana Cake', -3, 0, 'Conjured Mana Cake', -4, 0],
            ['+5 Dexterity Vest', 3, 13, '+5 Dexterity Vest', 2, 12],
            ['Aged Brie', -5, 12, 'Aged Brie', -6, 14],
            ['Elixir of the Mongoose', -2, 0, 'Elixir of the Mongoose', -3, 0],
            ['Sulfuras, Hand of Ragnaros', 0, 80, 'Sulfuras, Hand of Ragnaros', 0, 80],
            ['Sulfuras, Hand of Ragnaros', -1, 80, 'Sulfuras, Hand of Ragnaros', -1, 80],
            ['Backstage passes to a TAFKAL80ETC concert', 8, 29, 'Backstage passes to a TAFKAL80ETC concert', 7, 31],
            ['Backstage passes to a TAFKAL80ETC concert', 3, 50, 'Backstage passes to a TAFKAL80ETC concert', 2, 50],
            ['Backstage passes to a TAFKAL80ETC concert', -2, 0, 'Backstage passes to a TAFKAL80ETC concert', -3, 0],
            ['Conjured Mana Cake', -4, 0, 'Conjured Mana Cake', -5, 0],
            ['+5 Dexterity Vest', 2, 12, '+5 Dexterity Vest', 1, 11],
            ['Aged Brie', -6, 14, 'Aged Brie', -7, 16],
            ['Elixir of the Mongoose', -3, 0, 'Elixir of the Mongoose', -4, 0],
            ['Sulfuras, Hand of Ragnaros', 0, 80, 'Sulfuras, Hand of Ragnaros', 0, 80],
            ['Sulfuras, Hand of Ragnaros', -1, 80, 'Sulfuras, Hand of Ragnaros', -1, 80],
            ['+5 Dexterity Vest', 1, 11, '+5 Dexterity Vest', 0, 10],
            ['Aged Brie', -7, 16, 'Aged Brie', -8, 18],
            ['Elixir of the Mongoose', -4, 0, 'Elixir of the Mongoose', -5, 0],
            ['Sulfuras, Hand of Ragnaros', 0, 80, 'Sulfuras, Hand of Ragnaros', 0, 80],
            ['Sulfuras, Hand of Ragnaros', -1, 80, 'Sulfuras, Hand of Ragnaros', -1, 80],
            ['Conjured Mana Cake', -6, 0, 'Conjured Mana Cake', -7, 0],
            ['+5 Dexterity Vest', 0, 10, '+5 Dexterity Vest', -1, 8],
            ['Aged Brie', -8, 18, 'Aged Brie', -9, 20],
            ['Elixir of the Mongoose', -5, 0, 'Elixir of the Mongoose', -6, 0],
            ['Sulfuras, Hand of Ragnaros', 0, 80, 'Sulfuras, Hand of Ragnaros', 0, 80],
            ['Sulfuras, Hand of Ragnaros', -1, 80, 'Sulfuras, Hand of Ragnaros', -1, 80],
            ['Backstage passes to a TAFKAL80ETC concert', 5, 35, 'Backstage passes to a TAFKAL80ETC concert', 4, 38],
            ['Backstage passes to a TAFKAL80ETC concert', 0, 50, 'Backstage passes to a TAFKAL80ETC concert', -1, 0],
            ['Sulfuras, Hand of Ragnaros', 0, 79, 'Sulfuras, Hand of Ragnaros', 0, 80],
            ['Sulfuras, Hand of Ragnaros', 0, 81, 'Sulfuras, Hand of Ragnaros', 0, 80],
            ['Elixir of the Mongoose', -13, -1, 'Elixir of the Mongoose', -14, 0],
            ['Backstage passes to a TAFKAL80ETC concert', 7, 51, 'Backstage passes to a TAFKAL80ETC concert', 6, 50],
        ];
    }
}
