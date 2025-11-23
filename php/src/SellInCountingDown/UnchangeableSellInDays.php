<?php

declare(strict_types=1);

namespace GildedRose\SellInCountingDown;

final class UnchangeableSellInDays implements SellInCountingDownInterface
{
    public function updateSellInDays(int $currentSellInDays): int
    {
        return $currentSellInDays;
    }
}