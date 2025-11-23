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
            if ($item->name === 'Sulfuras, Hand of Ragnaros') {
                $item->quality = $item->qualityCalculator->calculateQuality($item->sellIn, $item->quality);
                continue;
            }
            if ($item->name === 'Aged Brie') {
                $item->quality = $item->qualityCalculator->calculateQuality($item->sellIn, $item->quality);
            } else if ($item->name === 'Backstage passes to a TAFKAL80ETC concert') {
                $item->quality = $item->qualityCalculator->calculateQuality($item->sellIn, $item->quality);
            } else {
                $item->quality = $item->qualityCalculator->calculateQuality($item->sellIn, $item->quality);
            }

            $item->sellIn--;
        }
    }

}
