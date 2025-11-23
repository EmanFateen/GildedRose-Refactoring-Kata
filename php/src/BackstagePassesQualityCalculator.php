<?php

declare(strict_types=1);

namespace GildedRose;

final class BackstagePassesQualityCalculator implements QualityCalculatorInterface
{
    public function calculateQuality(int $sellInDays, int $currentQuality): int
    {
        if ($sellInDays <= 1) {
            return 0;
        } else if ($sellInDays <= 5) {
            return min(50, $currentQuality + 3);
        } else if ($sellInDays <= 10) {
            return min(50, $currentQuality + 2);
        }

        return $currentQuality;
    }
}