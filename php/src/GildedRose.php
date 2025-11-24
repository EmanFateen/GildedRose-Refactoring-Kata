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
            $this->doUpdate($item);
        }
    }

    private function doUpdate(Item $item): void
    {
        if ($item->name === 'Sulfuras, Hand of Ragnaros')
            return;

        if ($item->name === 'Aged Brie') {
            $this->updateAgedBrie($item);
            return;
        }

        if ($item->name === 'Backstage passes to a TAFKAL80ETC concert') {
            $this->updateBackstagePasses($item);
            return;
        }

        $this->updateGeneralItems($item);
    }

    private function updateAgedBrie(Item $item): void
    {
        $item->sellIn--;

        $item->quality = $item->sellIn < 0
            ? min(50, $item->quality + 2)
            : min(50, $item->quality + 1);
    }

    private function updateBackstagePasses(Item $item): void
    {
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
    }

    private function updateGeneralItems(Item $item): void
    {
        $item->quality = max(0, $item->quality - 1);

        $item->sellIn--;

        if ($item->sellIn < 0) {
            $item->quality = max(0, $item->quality - 1);
        }
    }

}
