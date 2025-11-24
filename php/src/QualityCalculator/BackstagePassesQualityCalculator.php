<?php

declare(strict_types=1);

namespace GildedRose\QualityCalculator;

final class BackstagePassesQualityCalculator implements QualityCalculatorInterface
{
    public function calculateQuality(int $currentQuality, int $sellInDays): int
    {
        if ($sellInDays < 0) {
            return 0;
        }

        $currentQuality = min(50, $currentQuality + 1);

        if ($sellInDays < 5) {
            return min(50, $currentQuality + 2);
        }

        if ($sellInDays < 10) {
            return min(50, $currentQuality + 1);
        }

        return $currentQuality;
    }
}