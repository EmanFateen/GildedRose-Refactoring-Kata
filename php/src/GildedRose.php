<?php

declare(strict_types=1);

namespace GildedRose;

final class GildedRose
{
    /**
     * @param Item[] $items
     */
    public function __construct(
        private array $items
    )
    {
    }

    public function updateQuality(): void
    {
        foreach ($this->items as $item) {
            if ($item->name === 'Sulfuras, Hand of Ragnaros')
                continue;

            if ($item->name === 'Aged Brie') {
                $item->quality = min(50, ++$item->quality);

                $item->sellIn--;

                if ($item->sellIn < 0) {
                    $item->quality = min(50, ++$item->quality);
                }

                continue;
            }

            if ($item->name === 'Backstage passes to a TAFKAL80ETC concert') {
                $item->quality = min(50, ++$item->quality);

                if ($item->sellIn <= 5) {
                    $item->quality = min(50, $item->quality + 2);
                } else if ($item->sellIn <= 10) {
                    $item->quality = min(50, $item->quality + 1);
                }

                $item->sellIn--;

                if ($item->sellIn < 0) {
                    $item->quality = 0;
                }
                continue;

            }

            $item->quality = max(0, $item->quality - 1);

            $item->sellIn--;

            if ($item->sellIn < 0) {
                $item->quality = max(0, $item->quality - 1);
            }
        }
    }

}
