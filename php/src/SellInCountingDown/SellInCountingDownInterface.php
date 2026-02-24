<?php

namespace GildedRose\SellInCountingDown;

interface SellInCountingDownInterface
{
    public function updateSellInDays(int $currentSellInDays): int;
}