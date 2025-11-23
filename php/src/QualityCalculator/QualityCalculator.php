<?php

declare(strict_types=1);

namespace GildedRose\QualityCalculator;

final class QualityCalculator implements QualityCalculatorInterface
{

    public function calculateQuality(int $currentQuality, int $sellInDays): int
    {
        return max(0, $currentQuality - 2);
    }
}