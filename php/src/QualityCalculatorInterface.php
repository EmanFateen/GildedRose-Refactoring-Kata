<?php

namespace GildedRose;

interface QualityCalculatorInterface
{
    public function calculateQuality(int $currentQuality, int $sellInDays): int;
}