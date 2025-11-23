<?php

namespace GildedRose;

interface QualityCalculatorInterface
{
    public function calculateQuality(int $sellInDays, int $currentQuality): int;
}