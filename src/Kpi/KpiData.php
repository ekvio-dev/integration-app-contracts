<?php
declare(strict_types=1);

namespace Ekvio\Integration\Contracts\Kpi;

/**
 * Interface KpiData
 * @package Ekvio\Integration\Invoker
 */
interface KpiData
{
    /**
     * @return string
     */
    public function key(): string;
    /**
     * @return array
     */
    public function data(): array;
}