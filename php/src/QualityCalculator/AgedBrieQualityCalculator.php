<?php

declare(strict_types=1);

namespace GildedRose\QualityCalculator;

final class AgedBrieQualityCalculator implements QualityCalculatorInterface
{
    public function calculateQuality(int $currentQuality, int $sellInDays): int
    {
        return $sellInDays < 0
            ? min(50, $currentQuality + 2)
            : min(50, $currentQuality + 1);
    }
}