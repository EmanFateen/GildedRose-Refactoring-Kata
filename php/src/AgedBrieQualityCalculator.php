<?php

declare(strict_types=1);

namespace GildedRose;

final class AgedBrieQualityCalculator implements QualityCalculatorInterface
{
    public function calculateQuality(int $sellInDays, int $currentQuality): int
    {
        return min(50, ++$currentQuality);
    }
}