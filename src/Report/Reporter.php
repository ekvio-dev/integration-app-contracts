<?php
declare(strict_types=1);

namespace Ekvio\Integration\Contracts\Report;

/**
 * Interface Reporter
 * @package Ekvio\Integration\Contracts\Report
 */
interface Reporter
{
    /**
     * @param $data
     * @param array $options
     * @return Collector
     */
    public function build($data, array $options=[]): Collector;
}