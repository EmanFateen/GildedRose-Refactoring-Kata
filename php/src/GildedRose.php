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
        if ('Sulfuras, Hand of Ragnaros' === $item->name)
            return;

        $item->sellIn--;

        if ('Aged Brie' === $item->name) {
            $this->updateAgedBrie($item);
            return;
        }

        if ('Backstage passes to a TAFKAL80ETC concert' === $item->name) {
            $this->updateBackstagePasses($item);
            return;
        }

        $this->updateGeneralItems($item);
    }

    private function updateAgedBrie(Item $item): void
    {
        $item->quality = $item->sellIn < 0
            ? min(50, $item->quality + 2)
            : min(50, $item->quality + 1);
    }

    private function updateBackstagePasses(Item $item): void
    {
        if ($item->sellIn < 0) {
            $item->quality = 0;
            return;
        }

        $item->quality = min(50, ++$item->quality);
        if ($item->sellIn < 5) {
            $item->quality = min(50, $item->quality + 2);
        } else if ($item->sellIn < 10) {
            $item->quality = min(50, $item->quality + 1);
        }
    }

    private function updateGeneralItems(Item $item): void
    {
        $item->quality = $item->sellIn < 0
            ? max(0, $item->quality - 2)
            : max(0, $item->quality - 1);

    }
}
