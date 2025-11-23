<?php

namespace GildedRose;

interface SellInCountingDownInterface
{
    public function updateSellInDays(int $currentSellInDays): int;
}