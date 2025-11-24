<?php

declare(strict_types=1);

namespace GildedRose\QualityCalculator;

final class QualityCalculator implements QualityCalculatorInterface
{

    public function calculateQuality(int $currentQuality, int $sellInDays): int
    {
        return $sellInDays < 0
            ? max(0, $currentQuality - 2)
            : max(0, $currentQuality - 1);
    }
}