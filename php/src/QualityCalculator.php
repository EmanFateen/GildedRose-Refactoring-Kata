<?php

declare(strict_types=1);

namespace GildedRose;

final class QualityCalculator implements QualityCalculatorInterface
{

    public function calculateQuality(int $sellInDays, int $currentQuality): int
    {
        return max(0, $currentQuality - 2);
    }
}