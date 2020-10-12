<?php
declare(strict_types=1);

namespace Ekvio\Integration\Contracts\Report;

/**
 * Interface Collector
 * @package Ekvio\Integration\Contracts\Report
 */
interface Collector
{
    /**
     * @param array $options
     * @return array
     */
    public function header(array $options = []): array;

    /**
     * @param array $options
     * @return array
     */
    public function content(array $options = []): array;
}