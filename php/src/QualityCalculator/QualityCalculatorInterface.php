<?php

namespace GildedRose\QualityCalculator;

interface QualityCalculatorInterface
{
    public function calculateQuality(int $currentQuality, int $sellInDays): int;
}