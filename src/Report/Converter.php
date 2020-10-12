<?php
declare(strict_types=1);

namespace Ekvio\Integration\Contracts\Report;

/**
 * Interface Converter
 * @package Ekvio\Integration\Contracts\Report
 */
interface Converter
{
    /**
     * @param Collector $collector
     * @param array $options
     * @return mixed
     */
    public function convert(Collector $collector, array $options = []);
}