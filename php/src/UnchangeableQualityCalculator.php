<?php

declare(strict_types=1);

namespace GildedRose;

final class UnchangeableQualityCalculator implements QualityCalculatorInterface
{
    public function calculateQuality(int $sellInDays, int $currentQuality): int
    {
        return $currentQuality;
    }
}