<?php

declare(strict_types=1);

namespace GildedRose;

final class AgedBrieQualityCalculator implements QualityCalculatorInterface
{
    public function calculateQuality(int $currentQuality, int $sellInDays): int
    {
        return min(50, ++$currentQuality);
    }
}